# OAuth Google 2.0

## Deskripsi

Dalam repo ini, mengimplementasikan OAuth atau outentikasi menggunakan layanan dari google (versi 2.0), digunakan untuk melihat data data yang dapat di olah untuk disimpan ke database web yang dikirimkan melalui Google OAuth, menggunakan php untuk mengimplementasikan code

## Fitur

- Rest API
- OAuth Google (v2.0)
- Passport/ Coockie

## Cara Membuat Aplikasi

### Langkah 1:

Pastikan sudah membuat OAuth Google Project atau buat menggunakan link ini:

[Google Cloud Console](https://console.cloud.google.com/projectselector2/apis/credentials/consent?supportedpurview=project).

### Langkah 2:

setelah itu masukan token api yang telah didapatkan ke dalam `config.php`

```php
      <?php
      require_once 'vendor/autoload.php';
      
      $clientID = <YourIdClient>;
      $clientSecret = <YourSecretCodeClient>;
      $redirectURI = 'http://localhost/oauth-google/sign_in.php';
      
      // CREATE CLIENT REQUEST TO GOOGLE
      $client = new Google_Client();
      $client->setClientId($clientID);
      $client->setClientSecret($clientSecret);
      $client->setRedirectUri($redirectURI);
      $client->addScope('profile');
      $client->addScope('email');
```

### Langkah 3:

dan digunakan untuk memproses `login.js` untuk menyimpan data yang akan dikirim ke Google

```php
       <?php
      session_start();
      require_once 'config.php';
      
      if (isset($_GET['code'])) {
         $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
         $client->setAccessToken($token);
      
         $gauth = new Google_Service_Oauth2($client);
         $google_info = $gauth->userinfo->get();
      
         $userProfile = [
            'name' => $google_info->name,
            'email' => $google_info->email,
            'picture' => $google_info->picture,
         ];
      
         $_SESSION['info'] = $userProfile;
         header('Location: index.php');
      }
      ?>
```

### Langkah 4:

Jalan kan perintah ini untuk mendapatkan package:

```
composer install
```
<hr>
