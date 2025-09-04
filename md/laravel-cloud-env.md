# Laravel Cloud Environment Variables

Copy and paste these environment variables into your Laravel Cloud dashboard:

```env
# Application Settings
APP_NAME=Klubby
APP_ENV=production
APP_DEBUG=false
APP_TIMEZONE=Europe/London
APP_URL=https://klubby.co.uk

# Database Configuration (Neon Serverless PostgreSQL)
# These are usually auto-configured by Laravel Cloud
DB_CONNECTION=pgsql
# Laravel Cloud will auto-populate these:
# DB_HOST=
# DB_PORT=
# DB_DATABASE=
# DB_USERNAME=
# DB_PASSWORD=

# Redis Cache (if using Laravel Cloud Redis)
CACHE_STORE=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@klubby.co.uk
MAIL_FROM_NAME="${APP_NAME}"

# Stripe Configuration (Required for Cashier)
STRIPE_KEY=pk_live_YOUR_STRIPE_PUBLISHABLE_KEY
STRIPE_SECRET=sk_live_YOUR_STRIPE_SECRET_KEY
STRIPE_WEBHOOK_SECRET=whsec_YOUR_WEBHOOK_SECRET

# Cashier Configuration
CASHIER_CURRENCY=gbp
CASHIER_CURRENCY_LOCALE=en_GB
CASHIER_LOGGER=stack

# Subscription Plans (Custom)
STARTER_PRICE_ID=price_YOUR_STARTER_PRICE_ID
ESSENTIALS_PRICE_ID=price_YOUR_ESSENTIALS_PRICE_ID
PREMIUM_PRICE_ID=price_YOUR_PREMIUM_PRICE_ID

# AWS S3 Configuration (for file uploads if needed)
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=eu-west-2
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

# Pusher/Broadcasting (if using real-time features)
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=eu

# Security
BCRYPT_ROUNDS=12

# Session Configuration
SESSION_LIFETIME=120
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=lax

# Additional Klubby Specific Settings
PRIZE_DRAW_DAY=sunday
PRIZE_DRAW_TIME=20:00
FREE_TRIAL_DAYS=7
REFERRAL_BONUS_ENTRIES=5
BIRTHDAY_BONUS_MULTIPLIER=2

# Social Media (Optional)
FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=

# Analytics (Optional)
GOOGLE_ANALYTICS_ID=
FACEBOOK_PIXEL_ID=

# Partner Commission Settings
PARTNER_COMMISSION_RATE=0.15
PARTNER_MINIMUM_PAYOUT=50
PARTNER_PAYOUT_DELAY_DAYS=30

# System Notifications
ADMIN_EMAIL=admin@klubby.co.uk
ALERT_EMAIL=alerts@klubby.co.uk
```

## Required Values to Set

### 1. **Stripe Configuration** (CRITICAL)
You need to get these from your Stripe Dashboard:
- `STRIPE_KEY`: Your publishable key (starts with `pk_live_`)
- `STRIPE_SECRET`: Your secret key (starts with `sk_live_`)
- `STRIPE_WEBHOOK_SECRET`: From Stripe webhook settings (starts with `whsec_`)

### 2. **Mail Configuration**
Choose your email provider and add credentials:
- For Mailgun: Use the values from your Mailgun domain
- For SendGrid: Change `MAIL_HOST` to `smtp.sendgrid.net`
- For Amazon SES: Use SES SMTP credentials

### 3. **Database** 
Laravel Cloud should auto-configure these, but verify:
- The PostgreSQL connection details should be automatically populated
- Ensure `DB_CONNECTION=pgsql` is set

## Stripe Product Setup

In your Stripe Dashboard, create these products:

### Starter Plan - £5/month
- Price ID: Save this as `STARTER_PRICE_ID`
- Billing: Monthly
- Trial period: 7 days

### Essentials Plan - £25/month
- Price ID: Save this as `ESSENTIALS_PRICE_ID`
- Billing: Monthly
- Trial period: 7 days

### Premium Plan - £50/month
- Price ID: Save this as `PREMIUM_PRICE_ID`
- Billing: Monthly
- Trial period: 7 days

## After Setting Environment Variables

1. **Deploy** - Laravel Cloud will redeploy automatically
2. **Run Migrations** - Execute in Laravel Cloud terminal:
   ```bash
   php artisan migrate
   ```
3. **Clear Caches**:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## Testing Values (for staging/development)

If you want to test first, use these test values:
```env
APP_ENV=staging
APP_DEBUG=true
STRIPE_KEY=pk_test_YOUR_TEST_PUBLISHABLE_KEY
STRIPE_SECRET=sk_test_YOUR_TEST_SECRET_KEY