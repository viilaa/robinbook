<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tr', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Form ekstra alanlar içeremez.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklenen dosya boyutu çok yüksek. Lütfen daha küçük bir dosya yüklemeyi deneyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF fişi geçersiz. Formu tekrar göndermeyi deneyin.',
    'This value is not a valid HTML5 color.' => 'Bu değer, geçerli bir HTML5 rengi değil.',
    'Please enter a valid birthdate.' => 'Lütfen geçerli bir doğum tarihi girin.',
    'The selected choice is invalid.' => 'Seçilen seçim geçersiz.',
    'The collection is invalid.' => 'Koleksiyon geçersiz.',
    'Please select a valid color.' => 'Lütfen geçerli bir renk seçin.',
    'Please select a valid country.' => 'Lütfen geçerli bir ülke seçin.',
    'Please select a valid currency.' => 'Lütfen geçerli bir para birimi seçin.',
    'Please choose a valid date interval.' => 'Lütfen geçerli bir tarih aralığı seçin.',
    'Please enter a valid date and time.' => 'Lütfen geçerli bir tarih ve saat girin.',
    'Please enter a valid date.' => 'Lütfen geçerli bir tarih giriniz.',
    'Please select a valid file.' => 'Lütfen geçerli bir dosya seçin.',
    'The hidden field is invalid.' => 'Gizli alan geçersiz.',
    'Please enter an integer.' => 'Lütfen bir tam sayı girin.',
    'Please select a valid language.' => 'Lütfen geçerli bir dil seçin.',
    'Please select a valid locale.' => 'Lütfen geçerli bir yerel ayar seçin.',
    'Please enter a valid money amount.' => 'Lütfen geçerli bir para tutarı girin.',
    'Please enter a number.' => 'Lütfen bir numara giriniz.',
    'The password is invalid.' => 'Şifre geçersiz.',
    'Please enter a percentage value.' => 'Lütfen bir yüzde değeri girin.',
    'The values do not match.' => 'Değerler eşleşmiyor.',
    'Please enter a valid time.' => 'Lütfen geçerli bir zaman girin.',
    'Please select a valid timezone.' => 'Lütfen geçerli bir saat dilimi seçin.',
    'Please enter a valid URL.' => 'Lütfen geçerli bir giriniz URL.',
    'Please enter a valid search term.' => 'Lütfen geçerli bir arama terimi girin.',
    'Please provide a valid phone number.' => 'lütfen geçerli bir telefon numarası sağlayın.',
    'The checkbox has an invalid value.' => 'Onay kutusunda geçersiz bir değer var.',
    'Please enter a valid email address.' => 'Lütfen geçerli bir e-posta adresi girin.',
    'Please select a valid option.' => 'Lütfen geçerli bir seçenek seçin.',
    'Please select a valid range.' => 'Lütfen geçerli bir aralık seçin.',
    'Please enter a valid week.' => 'Lütfen geçerli bir hafta girin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bir yetkilendirme istisnası oluştu.',
    'Authentication credentials could not be found.' => 'Kimlik bilgileri bulunamadı.',
    'Authentication request could not be processed due to a system problem.' => 'Bir sistem hatası nedeniyle yetkilendirme isteği işleme alınamıyor.',
    'Invalid credentials.' => 'Geçersiz kimlik bilgileri.',
    'Cookie has already been used by someone else.' => 'Çerez bir başkası tarafından zaten kullanılmıştı.',
    'Not privileged to request the resource.' => 'Kaynak talebi için imtiyaz bulunamadı.',
    'Invalid CSRF token.' => 'Geçersiz CSRF fişi.',
    'No authentication provider found to support the authentication token.' => 'Yetkilendirme fişini destekleyecek yetkilendirme sağlayıcısı bulunamadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Oturum bulunamadı, zaman aşımına uğradı veya çerezler etkin değil.',
    'No token could be found.' => 'Fiş bulunamadı.',
    'Username could not be found.' => 'Kullanıcı adı bulunamadı.',
    'Account has expired.' => 'Hesap zaman aşımına uğradı.',
    'Credentials have expired.' => 'Kimlik bilgileri zaman aşımına uğradı.',
    'Account is disabled.' => 'Hesap engellenmiş.',
    'Account is locked.' => 'Hesap kilitlenmiş.',
    'Too many failed login attempts, please try again later.' => 'Çok fazla başarısız giriş denemesi, lütfen daha sonra tekrar deneyin.',
    'Invalid or expired login link.' => 'Geçersiz veya süresi dolmuş oturum açma bağlantısı.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
