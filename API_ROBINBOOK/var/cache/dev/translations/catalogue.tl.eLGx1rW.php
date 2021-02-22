<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
    'This value is not a valid HTML5 color.' => 'Ang halagang ito ay hindi wastong HTML5 color.',
    'Please enter a valid birthdate.' => 'Pakilagay ang tamang petsa ng kapanganakan.',
    'The selected choice is invalid.' => 'Ang pinagpiliang sagot ay hindi tama.',
    'The collection is invalid.' => 'Hindi balido ang koleksyon.',
    'Please select a valid color.' => 'Pakipiliin ang nararapat na kulay.',
    'Please select a valid country.' => 'Pakipiliin ang nararapat na bansa.',
    'Please select a valid currency.' => 'Pakipiliin ang tamang pananalapi.',
    'Please choose a valid date interval.' => 'Piliin ang wastong agwat ng petsa.',
    'Please enter a valid date and time.' => 'Piliin ang wastong petsa at oras.',
    'Please enter a valid date.' => 'Ilagay ang wastong petsa.',
    'Please select a valid file.' => 'Piliin ang balidong file.',
    'The hidden field is invalid.' => 'Hindi balido ang field na nakatago.',
    'Please enter an integer.' => 'Pakilagay ang integer.',
    'Please select a valid language.' => 'Piliin ang nararapat na lengguwahe.',
    'Please select a valid locale.' => 'Pakipili ang nararapat na locale.',
    'Please enter a valid money amount.' => 'Pakilagay ang tamang halaga ng pera.',
    'Please enter a number.' => 'Ilagay ang numero.',
    'The password is invalid.' => 'Hindi balido ang password.',
    'Please enter a percentage value.' => 'Pakilagay ang tamang porsyento ng halaga.',
    'The values do not match.' => 'Hindi tugma ang mga halaga.',
    'Please enter a valid time.' => 'Pakilagay ang tamang oras.',
    'Please select a valid timezone.' => 'Pakilagay ang tamang sona ng oras.',
    'Please enter a valid URL.' => 'Pakilagay ang balidong URL.',
    'Please enter a valid search term.' => 'Pakilagay ang balidong katagang sinasaliksik.',
    'Please provide a valid phone number.' => 'Pakilagay ang balidong numero ng telepono.',
    'The checkbox has an invalid value.' => 'Ang checkbox ay mayroon hindi balidong halaga.',
    'Please enter a valid email address.' => 'Pakilagay ang balidong email address.',
    'Please select a valid option.' => 'Pakipiliin ang balidong pagpipilian.',
    'Please select a valid range.' => 'Pakipilian ang balidong layo.',
    'Please enter a valid week.' => 'Pakilagay ang balidong linggo.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Isang pambihirang pagpaptunay ang nangyari.',
    'Authentication credentials could not be found.' => 'Hindi mahanap ang mga kinakailangan na dokumento para sa pagpapatunay.',
    'Authentication request could not be processed due to a system problem.' => 'Hindi maproseso ang iyong hiling dahil may problema sa sistema.',
    'Invalid credentials.' => 'Hindi balidong mga dokumento.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Hindi balidong mga token ng CSRF.',
    'No authentication provider found to support the authentication token.' => 'Walang nakitang nagbibibagay ng suporta sa token ng pagpapatunay.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang sesyon ng magagamit, ito ay nawalan ng oras o hindi pinagana.',
    'No token could be found.' => 'Walang token na nahanap.',
    'Username could not be found.' => 'Walang username na makita.',
    'Account has expired.' => 'Ang account ay nag-expire na.',
    'Credentials have expired.' => 'Ang mga kinakailangang dokumento ay nag expire na.',
    'Account is disabled.' => 'Ang account ay hindi pinagana.',
    'Account is locked.' => 'Ang account ay nakasara.',
    'Too many failed login attempts, please try again later.' => 'Madaming bagsak na pagtatangka, pakisubukan ulit mamaya.',
    'Invalid or expired login link.' => 'Inbalido o nagexpire na ang link para makapaglogin.',
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
