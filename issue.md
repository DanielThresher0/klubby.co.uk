# Illuminate\Foundation\ViteManifestNotFoundException - Internal Server Error
Vite manifest not found at: /var/www/html/public/build/manifest.json

PHP 8.4.2
Laravel 12.28.1
klubbycouk-main-ryblno.laravel.cloud

## Stack Trace

0 - vendor/laravel/framework/src/Illuminate/Foundation/Vite.php:935
1 - vendor/laravel/framework/src/Illuminate/Foundation/Vite.php:384
2 - resources/views/layouts/guest.blade.php:15
3 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:123
4 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:124
5 - vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php:57
6 - vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php:76
7 - vendor/laravel/framework/src/Illuminate/View/View.php:208
8 - vendor/laravel/framework/src/Illuminate/View/View.php:191
9 - vendor/laravel/framework/src/Illuminate/View/View.php:160
10 - vendor/laravel/framework/src/Illuminate/View/Concerns/ManagesComponents.php:99
11 - resources/views/auth/user-register.blade.php:1
12 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:123
13 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:124
14 - vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php:57
15 - vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php:76
16 - vendor/laravel/framework/src/Illuminate/View/View.php:208
17 - vendor/laravel/framework/src/Illuminate/View/View.php:191
18 - vendor/laravel/framework/src/Illuminate/View/View.php:160
19 - vendor/laravel/framework/src/Illuminate/Http/Response.php:78
20 - vendor/laravel/framework/src/Illuminate/Http/Response.php:34
21 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:939
22 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:906
23 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:821
24 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:180
25 - vendor/laravel/framework/src/Illuminate/Auth/Middleware/RedirectIfAuthenticated.php:35
26 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
27 - vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php:50
28 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
29 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php:87
30 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
31 - vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php:48
32 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
33 - vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php:120
34 - vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php:63
35 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
36 - vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php:36
37 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
38 - vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php:74
39 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
40 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:137
41 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:821
42 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:800
43 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:764
44 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:753
45 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:200
46 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:180
47 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php:21
48 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php:31
49 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
50 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php:21
51 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php:51
52 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
53 - vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php:27
54 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
55 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php:109
56 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
57 - vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php:48
58 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
59 - vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php:58
60 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
61 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php:22
62 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
63 - vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePathEncoding.php:26
64 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
65 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:137
66 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:175
67 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:144
68 - vendor/laravel/framework/src/Illuminate/Foundation/Application.php:1220
69 - public/index.php:20

## Request

GET /register/user

## Headers

* **x-scheme**: https
* **x-request-id**: 2c46552ab3535c816fe950b115b779b5
* **x-real-ip**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20
* **x-original-forwarded-for**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20, 88.97.251.20
* **x-forwarded-scheme**: https
* **x-forwarded-proto**: https, https
* **x-forwarded-port**: 443, 443
* **x-forwarded-host**: klubbycouk-main-ryblno.laravel.cloud
* **x-forwarded-for**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20, 2a05:d01c:243:e505:9658::1d
* **upgrade-insecure-requests**: 1
* **sec-fetch-user**: ?1
* **sec-fetch-site**: same-origin
* **sec-fetch-mode**: navigate
* **sec-fetch-dest**: document
* **sec-ch-ua-platform**: "Windows"
* **sec-ch-ua-mobile**: ?0
* **sec-ch-ua**: "Not;A=Brand";v="99", "Google Chrome";v="139", "Chromium";v="139"
* **referer**: https://klubbycouk-main-ryblno.laravel.cloud/
* **priority**: u=0, i
* **cookie**: XSRF-TOKEN=eyJpdiI6IkFKQjNMNFdoOTQrZjBkTGZucEdGRHc9PSIsInZhbHVlIjoiUkM3YWkzdEpsYnhNU0trVGpaMk05bzdQL0RVRHBnK29xODBDTzZ1M1Q4STkveE5vUE5RNTlIMzVBdG9lWmljS0Qzc0Nrem14UGpCTVR0Q1RTT1JDRE1relJIK21nRElJVlRXd1VKWjNvTGxsZStDMFFEZnhTUWFiSGxVanpHcHIiLCJtYWMiOiI5NDI5ZjE5Nzk2OTRiODk4YTk5NDBkMjIxMjQwMjNlZjJhZTA4YjQ1ZWRmNDNkMjc1NmEzODg1ZmMzMDFlNDc1IiwidGFnIjoiIn0%3D; klubbycouk-session=eyJpdiI6InhVcmJGN09IelFORkIrKzZXU2dncWc9PSIsInZhbHVlIjoiQ0YvUkNJdXQzTXorU2tMRFM3UWd2OWdUcHhIc1JtbXJkeTRyY3Y3bksvTHprbEJ0K3Ntd2hiKy9UamUxejhRSlhUNEhIZWJ0RXAxZlNkVStaalRGNXljZlh6Rk00SUxWYUkyaWprQXhQNkFHZHRybHZubFJoVHhpclNOVTZnbU4iLCJtYWMiOiI4NzRhNDI3OTIyYzFhM2I5NmRiODQ5M2MzZTczOWY3Nzc0YTc3MDM5NTU3Yjg2MTc5NTFlN2ViMDE5ZWUzMmFlIiwidGFnIjoiIn0%3D; Ep21RsesoA9RVFM0EYCc0ofayh2VQQKuJar0aQve=eyJpdiI6Im1RRXo1KzJ1dzlia2liamUxcWZQT1E9PSIsInZhbHVlIjoic2xvZWdmWUJiUzZCU2ltTzNYNG5NMkRsTnNRMmVxWElkQTc3cnc4aDJlZzc3RUp0ejFnYzJHR3I5RlZybFg5Q2U1R3FndU9FV0ZUdDBIR3ArVFEzcUVzVXJIc0RHQnUvMUpSTkd5Mko1YTFMby9XZUNWOFRsQjRrRjJwREVtQWVGTldpa0JoTFhvMEdHdFNmeHpreExNcmVyTHBpRnFnZjVpVWxPaXpNVHR3ZVZqcmppTFV1UFdNdUdnMi9xWnowT1kvc2FkVmRCaXRBRXFJWlVQNTREZnQ3eVlNeGV2QzhRS0xRbXF6bVp2YVdpbE9FY2ZkeERsZzBvNUJ6TnpsMG96RUVCN1loOEFmTXJ5Z3RUQnpocDd4Sk83ckNqaVFHak9YUGdJN0d3dVRSWlI4eWFKUDhWQjl1eEJRMWVyQkw1UkFmT3pJejc3MHRSdVJFRFNkdmpPOThYMStPU2VQZmJzYlV2dFgxNTBHREdRNitrcC9uMHh1UWU0MHdBbndKSDNGODlkdWZvb252WmxBSWRPTTdSUT09IiwibWFjIjoiOWYwODE1MjNiMmJhODdmMDc0NjZjNzc1NDg2ZTYyMzBjYmViYjdiM2M2MjQwZjg1OWUxY2FkM2MzNjdmMWY1YiIsInRhZyI6IiJ9
* **cf-warp-tag-id**: 29634ccd-99fd-4ae6-9af1-cfa935b2ccbf
* **cf-visitor**: {"scheme":"https"}
* **cf-ray**: 97a023c9feff9442-CDG
* **cf-ipcountry**: GB
* **cf-connecting-ip**: 88.97.251.20
* **cdn-loop**: cloudflare; loops=1
* **accept-language**: en-GB,en-US;q=0.9,en;q=0.8
* **accept-encoding**: gzip, br
* **accept**: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
* **user-agent**: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36
* **host**: klubbycouk-main-ryblno.laravel.cloud

## Route Context

controller: Closure
route name: user.register
middleware: web, guest

## Route Parameters

No route parameter data available.

## Database Queries

No database queries detected.
# Illuminate\Foundation\ViteManifestNotFoundException - Internal Server Error
Vite manifest not found at: /var/www/html/public/build/manifest.json

PHP 8.4.2
Laravel 12.28.1
klubbycouk-main-ryblno.laravel.cloud

## Stack Trace

0 - vendor/laravel/framework/src/Illuminate/Foundation/Vite.php:935
1 - vendor/laravel/framework/src/Illuminate/Foundation/Vite.php:384
2 - resources/views/layouts/guest.blade.php:15
3 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:123
4 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:124
5 - vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php:57
6 - vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php:76
7 - vendor/laravel/framework/src/Illuminate/View/View.php:208
8 - vendor/laravel/framework/src/Illuminate/View/View.php:191
9 - vendor/laravel/framework/src/Illuminate/View/View.php:160
10 - vendor/laravel/framework/src/Illuminate/View/Concerns/ManagesComponents.php:99
11 - resources/views/auth/user-register.blade.php:1
12 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:123
13 - vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:124
14 - vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php:57
15 - vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php:76
16 - vendor/laravel/framework/src/Illuminate/View/View.php:208
17 - vendor/laravel/framework/src/Illuminate/View/View.php:191
18 - vendor/laravel/framework/src/Illuminate/View/View.php:160
19 - vendor/laravel/framework/src/Illuminate/Http/Response.php:78
20 - vendor/laravel/framework/src/Illuminate/Http/Response.php:34
21 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:939
22 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:906
23 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:821
24 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:180
25 - vendor/laravel/framework/src/Illuminate/Auth/Middleware/RedirectIfAuthenticated.php:35
26 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
27 - vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php:50
28 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
29 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php:87
30 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
31 - vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php:48
32 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
33 - vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php:120
34 - vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php:63
35 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
36 - vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php:36
37 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
38 - vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php:74
39 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
40 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:137
41 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:821
42 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:800
43 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:764
44 - vendor/laravel/framework/src/Illuminate/Routing/Router.php:753
45 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:200
46 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:180
47 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php:21
48 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php:31
49 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
50 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php:21
51 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php:51
52 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
53 - vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php:27
54 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
55 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php:109
56 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
57 - vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php:48
58 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
59 - vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php:58
60 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
61 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php:22
62 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
63 - vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePathEncoding.php:26
64 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:219
65 - vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php:137
66 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:175
67 - vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php:144
68 - vendor/laravel/framework/src/Illuminate/Foundation/Application.php:1220
69 - public/index.php:20

## Request

GET /register/user

## Headers

* **x-scheme**: https
* **x-request-id**: 24d1f38ebe04eb00d74681ea971fb59d
* **x-real-ip**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20
* **x-original-forwarded-for**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20, 88.97.251.20
* **x-forwarded-scheme**: https
* **x-forwarded-proto**: https, https
* **x-forwarded-port**: 443, 443
* **x-forwarded-host**: klubbycouk-main-ryblno.laravel.cloud
* **x-forwarded-for**: 2a05:d01c:243:e503:ee5c::f, 88.97.251.20, 2a05:d01c:243:e504:9e8e::8
* **upgrade-insecure-requests**: 1
* **sec-fetch-user**: ?1
* **sec-fetch-site**: same-origin
* **sec-fetch-mode**: navigate
* **sec-fetch-dest**: document
* **sec-ch-ua-platform**: "Windows"
* **sec-ch-ua-mobile**: ?0
* **sec-ch-ua**: "Not;A=Brand";v="99", "Google Chrome";v="139", "Chromium";v="139"
* **referer**: https://klubbycouk-main-ryblno.laravel.cloud/
* **priority**: u=0, i
* **cookie**: XSRF-TOKEN=eyJpdiI6InJNYXZFT1oxTkhrZFJPUDJMb0NNTEE9PSIsInZhbHVlIjoiS2d2TDl5WkdhQWZSVnVCYVZsdndEbnRVT1pONm9hcG1XWDVLdGhtbVhIN0tnd3B2eWZqNFF6US9KZCtxUUl5RVIzelc1MmVQZElGTXVhVmIwVDkzd3NiODVpOVBuUDNRYWYybllaVVptL0FWdjdEaVBTcXE2QlFkdW16aXVEQmQiLCJtYWMiOiIyYWE4OGUwYjQ3MWY5OTEwNTc5MzBkYjM4YjE4YzY3YWMyNTY0ODM4Y2JjNDU3MTMwNThlYTVlMGI5NjRmYWFjIiwidGFnIjoiIn0%3D; klubbycouk-session=eyJpdiI6ImRzWlRoR1U5MUlKQ1R2cUMxdERFWlE9PSIsInZhbHVlIjoiYVlTdXV1eTBIN2N4c0ZCYm5pSnVSMno4dzQrNUpWbGZSRGpkS1JjeGtFdXJmZEd2N0U2YmhNQ2svL01mYnNpZ01FRHNQeXlMN09BSlF6WG91cjJscXFDYTRWaE1sQWFtR0RIeno5eGkvS2JEYjB5SFg1ZUphSVNHalIxaS8yMUEiLCJtYWMiOiI2MzI1MGI1ZWE5OWZlZDAxNDZiYTBiYmNiNzU5ODczNzUzOWUxNWYzOTA1OTk0NjkzOWFkMzYzOTgwNzI3MDFiIiwidGFnIjoiIn0%3D; Ep21RsesoA9RVFM0EYCc0ofayh2VQQKuJar0aQve=eyJpdiI6IlUzTHJpdE5HZWlDaWl1N1QvUGl4V1E9PSIsInZhbHVlIjoiNUlPVlRNTGN1a0h6azVsOVNFVEdPZk0yQVBSbjZyS0Zva3RLaEVUWWJTcU5DS0g2WWVMNmhyVWpyYU9IUDlEY09Xam9ScXhkUlNiQkNJNUZ3U2U2cHNLR05TUHZEMnRyZnh2azJuKzFDbElFY3RoWmxjMW5uNCtRdDcvdjdaYTBNMmtwWk5rTm9GUWlsRk03ZVA0VFlZM0tDYXQ2VEVTdDhrUjRjQlg4NEpIcmNTditadlUwb29rNTgxdXhacUllbGNYdmtoOXBsWVNVb1NNekpPYUlmeGJmc25kVDlIVHpTU3FCT3kxOFhmK29Pc1dXbmRMaGMvUFFQT2pSWFYrOU1DVTNQWlFMenYxZitFYkxVR1hHekxyWXdQeVpaUG9aeExMZXBkSDc5bnNEaHhjYUdpUmtUb0hPY2xBYS85RzlpaS96YVlFMHJEMldZV1lyYVhOZTF2MitKSHZUZUltVlNMRXd1OXhlNTJ4UURQVm14bDlGWnhYa3pTMDNCaG5zUGRmVjFYeWl3WnJtTVB0YXhBc1BTUT09IiwibWFjIjoiZWExMjUzM2M1ZWFjY2IxYzNkYWFmMDM0Yjc3NTM1OTFmNDlkZjU3MDZiZmJmZjBkOTI2NTgwOTYzN2ZjYzIyYyIsInRhZyI6IiJ9
* **cf-warp-tag-id**: 29634ccd-99fd-4ae6-9af1-cfa935b2ccbf
* **cf-visitor**: {"scheme":"https"}
* **cf-ray**: 97a02567afe0d4d5-CDG
* **cf-ipcountry**: GB
* **cf-connecting-ip**: 88.97.251.20
* **cdn-loop**: cloudflare; loops=1
* **accept-language**: en-GB,en-US;q=0.9,en;q=0.8
* **accept-encoding**: gzip, br
* **accept**: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
* **user-agent**: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36
* **host**: klubbycouk-main-ryblno.laravel.cloud

## Route Context

controller: Closure
route name: user.register
middleware: web, guest

## Route Parameters

No route parameter data available.

## Database Queries

No database queries detected.
