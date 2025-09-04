# Laravel Cloud Deployment Guide for Klubby

## Serverless Postgres Configuration (Recommended)

### Why Serverless Postgres for Klubby?

Based on the Klubby project requirements:

1. **Variable Traffic Patterns** - Weekly prize draws create traffic spikes
2. **Cost Optimization** - Pay-per-use aligns with subscription model (£5/£25/£50 tiers)  
3. **Auto-scaling** - Handles growth without manual intervention
4. **Modern Features** - Better JSON support for AI recommendations and analytics

## Setup Instructions

### 1. Prerequisites
- Laravel Cloud account
- Neon (or similar) Serverless Postgres account
- Stripe account for payments
- AWS account for SES and S3

### 2. Database Setup (Neon Serverless Postgres)

```bash
# Create a new Neon project in eu-west-2 (London) region
# Copy your connection string
```

### 3. Environment Variables for Laravel Cloud

Add these to your Laravel Cloud environment:

```env
# Database (Serverless Postgres)
DB_CONNECTION=pgsql
DB_HOST=your-neon-host.neon.tech
DB_PORT=5432
DB_DATABASE=klubby
DB_USERNAME=your-username
DB_PASSWORD=your-password
DB_SSLMODE=require

# Redis (Upstash Serverless)
REDIS_HOST=your-upstash-host.upstash.io
REDIS_PASSWORD=your-upstash-password
REDIS_PORT=6379

# Stripe Configuration
STRIPE_KEY=pk_live_xxxxx
STRIPE_SECRET=sk_live_xxxxx
STRIPE_WEBHOOK_SECRET=whsec_xxxxx
CASHIER_CURRENCY=gbp
CASHIER_CURRENCY_LOCALE=en_GB

# AWS Services (eu-west-2 region)
AWS_ACCESS_KEY_ID=xxxxx
AWS_SECRET_ACCESS_KEY=xxxxx
AWS_DEFAULT_REGION=eu-west-2
AWS_BUCKET=klubby-assets

# Mail (SES)
MAIL_MAILER=ses
MAIL_FROM_ADDRESS=hello@klubby.co.uk
MAIL_FROM_NAME=Klubby
```

### 4. Deploy to Laravel Cloud

```bash
# Install Laravel Cloud CLI
composer global require laravel/cloud-cli

# Initialize cloud deployment
cloud init

# Deploy to production
cloud deploy production
```

### 5. Post-Deployment

```bash
# Run migrations
cloud artisan migrate --force

# Create Stripe webhook
cloud artisan cashier:webhook

# Create subscription plans
cloud artisan tinker
>>> use Laravel\Cashier\Cashier;
>>> $starter = Cashier::stripe()->prices->create([
>>>     'currency' => 'gbp',
>>>     'unit_amount' => 500,
>>>     'recurring' => ['interval' => 'month'],
>>>     'product_data' => ['name' => 'Starter Plan']
>>> ]);
>>> $essentials = Cashier::stripe()->prices->create([
>>>     'currency' => 'gbp',
>>>     'unit_amount' => 2500,
>>>     'recurring' => ['interval' => 'month'],
>>>     'product_data' => ['name' => 'Essentials Plan']
>>> ]);
>>> $premium = Cashier::stripe()->prices->create([
>>>     'currency' => 'gbp',
>>>     'unit_amount' => 5000,
>>>     'recurring' => ['interval' => 'month'],
>>>     'product_data' => ['name' => 'Premium Plan']
>>> ]);
```

## Local Development

### Start Docker containers:
```bash
./vendor/bin/sail up -d
```

### Run migrations:
```bash
./vendor/bin/sail artisan migrate
```

### Access services:
- Application: http://localhost
- Mailpit: http://localhost:8025
- PostgreSQL: localhost:5432

## Scaling Configuration

The project is configured to automatically scale:

- **Normal Load**: 1-10 instances
- **Draw Times** (Fri/Sat 7-10pm UK): 3-20 instances
- **CPU Target**: 70%
- **Memory Target**: 80%

## Monitoring

- Application logs: `cloud logs production`
- Queue monitoring: `cloud queue:monitor production`
- Database metrics: Available in Neon dashboard

## Backup Strategy

Serverless Postgres (Neon) provides:
- Automatic daily backups
- Point-in-time recovery
- Branch databases for testing

## Support

For issues related to:
- Laravel Cloud: https://cloud.laravel.com/docs
- Neon Database: https://neon.tech/docs
- Laravel Cashier: https://laravel.com/docs/cashier