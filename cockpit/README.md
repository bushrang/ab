# Adbites Growth Cockpit

**Zentrales Kundenportal für KI-gestütztes Retail-Marketing**

Ein mandantenfähiges Web-Portal zur Aggregation, Visualisierung und Steuerung aller Online-Marketing-Aktivitäten von Adbites für stationäre Händler.

---

## Projekt-Übersicht

### Vision
Das Adbites Growth Cockpit dient als zentrale Schnittstelle für alle Marketing-Services:
- **Datengesteuert**: Klare KPIs aus Meta Ads, Pinterest Ads, Chatbots, Newsletter
- **Einfachheit**: Minimalistisches, intuitives Interface (Adbites-Regel #5)
- **Geschwindigkeit**: Schnelles Laden durch KPI-Snapshots (Adbites-Regel #2)
- **Ecosystem-Denken**: Alle Module verbunden (Adbites-Regel #7)
- **Automatisierung**: Self-Service für Kunden, eliminiert manuelles Reporting (Adbites-Regel #9)

### Tech-Stack
- **Backend**: Laravel 11 (PHP 8.3+)
- **Frontend**: Vue.js 3 + Inertia.js + Tailwind CSS
- **Datenbank**: MySQL/MariaDB
- **Auth**: Laravel Breeze + Sanctum (SPA Authentication)
- **Build**: Vite
- **Hosting**: Shared Linux Server (LAMP/LEMP) - KAS Server

---

## MVP Status (Phase 1)

### ✅ Implementiert

#### Datenbank-Architektur
Mandantenfähiges Schema mit folgenden Tabellen:
- `users` - Adbites Admin-Benutzer (Rolle: admin)
- `clients` - Kunden/Mandanten (z.B. HolzLand, Underberg)
- `client_users` - Kunden-Login-Benutzer (Rolle: client)
- `services` - Gebuchte Services pro Client (meta_ads, pinterest_ads, chatbot_wa, etc.)
- `api_credentials` - Verschlüsselte API-Keys pro Client (Meta, Pinterest, Google Analytics, etc.)
- `kpi_snapshots` - Tägliche KPI-Aggregation für schnelles Dashboard-Loading

#### Eloquent-Modelle
Alle Modelle mit vollständigen Beziehungen:
```php
Client → hasMany(ClientUser, Service, ApiCredential, KpiSnapshot)
ClientUser → belongsTo(Client)
Service → belongsTo(Client)
ApiCredential → belongsTo(Client) // Auto-Encryption für credential_value
KpiSnapshot → belongsTo(Client)
User → isAdmin(), isClient() Helper-Methods
```

#### Sicherheit
- **Authentifizierung**: Laravel Breeze mit Vue.js SSR
- **Rollen-System**: Admin (Adbites Team) vs. Client (Kunde)
- **Middleware**: `EnsureUserIsAdmin`, `EnsureClientAccess` (vorbereitet)
- **Encryption**: API-Credentials automatisch verschlüsselt
- **CSRF, SQL-Injection, XSS**: Laravel-Standard-Schutz

### 🚧 Ausstehend (nächste Schritte)

1. **Middleware implementieren**
   - `EnsureClientAccess`: Mandanten-Isolation (Clients sehen nur eigene Daten)
   - Route-Guards für Admin-Bereich

2. **Database Seeders**
   - Test-Admin-User
   - Demo-Client mit Services
   - Beispiel-KPI-Daten

3. **Admin-Bereich (Controller + Views)**
   - `/admin/clients` - Client-Verwaltung (CRUD)
   - `/admin/client-users` - Kunden-Login-Verwaltung
   - `/admin/api-credentials` - API-Keys hinterlegen

4. **Dashboard erweitern**
   - KPI-Widgets für Gesamt-Ausgaben, Leads, Konversationen
   - Feedback-Widget (Adbites-Regel #1: Kommunikation)
   - Chart.js Integration für Liniendiagramme

5. **Modul-Seiten** (Vue-Komponenten)
   - `/kampagnen/meta` - Meta Ads KPIs
   - `/kampagnen/pinterest` - Pinterest Ads KPIs
   - `/engagement/chatbots` - Chatbot-Statistiken
   - `/engagement/newsletter` - Newsletter-Metriken
   - `/content/ki-medien` - KI-Avatar-Videos (Galerie)
   - `/automatisierung/agenten` - KI-Agent Task-Queue

6. **API-Integrationen (Service-Klassen)**
   - `MetaAdsService` - Meta Graph API
   - `PinterestAdsService` - Pinterest Ads API
   - `ChatbotService` - Chatbot-Provider-API
   - `NewsletterService` - Brevo/Mailchimp API

---

## Installation & Deployment

### Voraussetzungen
- PHP 8.3+ mit Extensions: mbstring, xml, zip, mysql, curl, bcmath, intl, gd
- MySQL 5.7+ oder MariaDB 10.3+
- Composer (nur für lokale Entwicklung)
- Node.js 18+ & NPM (nur für lokale Entwicklung)

### Lokale Entwicklung

```bash
# Repository clonen
git clone <repository-url>
cd cockpit

# Dependencies installieren
composer install
npm install

# .env-Datei konfigurieren
cp .env.example .env
php artisan key:generate

# Datenbank-Credentials in .env setzen
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=adbites_cockpit
DB_USERNAME=root
DB_PASSWORD=

# Datenbank migrieren
php artisan migrate

# Seeders ausführen (nach Implementierung)
php artisan db:seed

# Frontend kompilieren
npm run build  # Produktion
npm run dev    # Entwicklung (Hot Reload)

# Server starten
php artisan serve
```

### Deployment auf Shared Hosting (KAS Server)

#### Option 1: Manueller Upload

1. **Lokal vorbereiten:**
```bash
# Alle Dependencies installieren
composer install --no-dev --optimize-autoloader
npm install && npm run build

# Produktions-.env erstellen
cp .env.example .env.production
```

2. **Konfiguration (.env.production):**
```env
APP_NAME="Adbites Growth Cockpit"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://siteiq.de
APP_TIMEZONE=Europe/Berlin

DB_CONNECTION=mysql
DB_HOST=w01bce55.kasserver.com
DB_PORT=3306
DB_DATABASE=d0361807
DB_USERNAME=d0361807
DB_PASSWORD=Gr5AWPAY3s9Rop3Po5NH

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

3. **Upload per FTP/SFTP:**
```
- Alle Dateien hochladen (inkl. vendor/ und node_modules/ - NUR wenn Composer/NPM auf Server nicht verfügbar)
- .env.production → .env umbenennen
- Berechtigungen setzen:
  chmod 775 storage/ -R
  chmod 775 bootstrap/cache/ -R
```

4. **.htaccess für Shared Hosting:**
Erstelle `.htaccess` im **Root-Verzeichnis** (über `/cockpit/public`):
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

In `/cockpit/public/.htaccess` (bereits vorhanden durch Laravel):
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

5. **Datenbank migrieren:**
Falls SSH-Zugriff:
```bash
cd /pfad/zum/cockpit
php artisan migrate --force
```

Falls kein SSH: Migrationen manuell über phpMyAdmin ausführen (SQL aus `database/migrations/*.php` extrahieren)

#### Option 2: Git Deployment (empfohlen)

```bash
# Auf Server (SSH):
cd /pfad/zum/webroot
git clone <repository-url> cockpit
cd cockpit
composer install --no-dev --optimize-autoloader
npm install && npm run build
cp .env.example .env
# .env bearbeiten mit Server-Credentials
php artisan key:generate
php artisan migrate --force
```

---

## Projektstruktur

```
cockpit/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/          # Breeze-Authentifizierung
│   │   │   └── ProfileController.php
│   │   ├── Middleware/
│   │   │   ├── EnsureUserIsAdmin.php
│   │   │   ├── EnsureClientAccess.php
│   │   │   └── HandleInertiaRequests.php
│   │   └── Requests/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Client.php
│   │   ├── ClientUser.php
│   │   ├── Service.php
│   │   ├── ApiCredential.php
│   │   └── KpiSnapshot.php
│   └── Providers/
├── database/
│   ├── migrations/         # Datenbank-Schema
│   ├── seeders/            # Test-Daten (TODO)
│   └── factories/
├── resources/
│   ├── js/
│   │   ├── Components/     # Vue-Komponenten (Buttons, Inputs, etc.)
│   │   ├── Layouts/
│   │   │   ├── AuthenticatedLayout.vue
│   │   │   └── GuestLayout.vue
│   │   ├── Pages/
│   │   │   ├── Auth/       # Login, Register, etc.
│   │   │   ├── Dashboard.vue
│   │   │   └── Profile/
│   │   ├── app.js          # Inertia.js Setup
│   │   └── ssr.js          # Server-Side Rendering
│   ├── css/
│   │   └── app.css         # Tailwind CSS
│   └── views/
│       └── app.blade.php   # Haupt-Template
├── routes/
│   ├── web.php             # Web-Routen
│   └── auth.php            # Auth-Routen
├── public/
│   ├── build/              # Kompilierte Assets (Vite)
│   └── index.php
├── .env.example            # Umgebungs-Template
├── composer.json
├── package.json
├── vite.config.js
└── tailwind.config.js
```

---

## Entwicklungs-Roadmap

### Phase 2 (Modul-Integration)
- Meta Ads API-Integration
- Pinterest Ads API-Integration
- Dashboard KPI-Widgets mit echten Daten
- Admin CRUD für Clients/Services

### Phase 3 (Engagement & Content)
- Chatbot-Integration (WhatsApp, Web, Instagram)
- Newsletter-Integration (Brevo/Mailchimp)
- KI-Avatar-Video-Galerie

### Phase 4 (KI-Automatisierung)
- KI-Agenten-Task-Queue
- Automatische Report-Generierung
- Selbstlernende KPI-Optimierung

---

## Sicherheitshinweise

1. **Niemals .env in Git committen** (bereits in `.gitignore`)
2. **APP_DEBUG=false** in Produktion
3. **API-Credentials nur verschlüsselt speichern** (bereits implementiert)
4. **HTTPS erzwingen** auf Produktion
5. **Regelmäßige Updates**: `composer update`, `npm update`

---

## Adbites Design-Prinzipien

Diese Regeln leiten alle Design- und Entwicklungsentscheidungen:

1. **Kommunikation ist König** → Feedback-Widget im Dashboard
2. **Geschwindigkeit gewinnt** → KPI-Snapshots, Vite, SSR
3. **Datengesteuert** → Jede Ansicht zeigt klare Metriken
4. **Iterativ > Perfekt** → MVP zuerst, dann erweitern
5. **Einfachheit** → Minimalistisches UI, Tailwind-Only
6. **Kundenfokus** → Self-Service, keine manuellen Reports
7. **Ecosystem-Denken** → Alle Module verbunden
8. **Experiment-Kultur** → A/B-Testing für neue Features
9. **Automatisierung** → Cronjobs für KPI-Updates
10. **KI-First** → Zukunftsmodul: KI-Agenten

---

## Support & Kontakt

**Adbites Marketing GmbH**
Entwickelt mit Laravel 11 + Vue.js 3
© 2025 Adbites. Alle Rechte vorbehalten.

---

## Lizenz

Proprietäre Software - Adbites Marketing GmbH
