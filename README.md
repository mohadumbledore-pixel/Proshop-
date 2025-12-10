

````markdown
# 📦 ProShop – Gestion de Produits

ProShop est une application Laravel permettant de gérer facilement vos produits : ajout, modification, suppression, aperçu des images, statistiques, tableau de bord, etc.

Ce projet offre une interface simple, rapide et intuitive pour administrer un catalogue de produits.

---

## 🚀 Fonctionnalités

- ✔️ Authentification complète (Login / Register / Logout)  
- ✔️ Tableau de bord avec statistiques :
  - Nombre total de produits  
  - Dernier produit ajouté  
- ✔️ CRUD complet :
  - Ajouter un produit  
  - Modifier un produit  
  - Supprimer un produit  
  - Voir les détails  
- ✔️ Upload d’image avec stockage dans `/storage/products`  
- ✔️ Interface responsive avec Bootstrap  
- ✔️ Sécurisation via middleware `auth`

---

## 📸 Captures d’écran

> Place tes images dans un dossier `/screenshots` à la racine du projet.

### 🏠 Page de connexion
![Login](./screenshots/login.png)

### 📊 Tableau de bord
![Dashboard](./screenshots/dashboard.png)

### 📦 Liste des produits
![Products](./screenshots/products.png)

### ➕ Ajout d’un produit
![Add Product](./screenshots/add_product.png)

---

## 🛠️ Installation

### 1. Cloner le projet
```bash
git clone https://github.com/tonrepo/proshop.git
cd proshop
````

### 2. Installer les dépendances

```bash
composer install
npm install
npm run build
```

### 3. Configuration de l’environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurer ensuite votre fichier `.env` (MySQL, mail, etc.)

### 4. Migration de la base de données

```bash
php artisan migrate
```

### 5. Lier le stockage

```bash
php artisan storage:link
```

### 6. Démarrer le serveur

```bash
php artisan serve
```

---

## 📂 Structure principale

```
app/
 ├── Http/
 │    ├── Controllers/
 │    │    └── ProductController.php
 │
public/
 └── storage/  → lien vers storage/app/public
resources/
 ├── views/
 │    ├── dashboard.blade.php
 │    ├── products/
 │    └── layouts/
routes/
 └── web.php
storage/
 └── app/public/products
```

---

## 🧩 Technologies utilisées

* Laravel 12
* PHP 8.3+
* Bootstrap 5
* MySQL
* Blade Templates
* Eloquent ORM

---

## 🔐 Authentification

L’application gère automatiquement :

* ✔ Login
* ✔ Register
* ✔ Reset Password
* ✔ Sessions sécurisées

---




