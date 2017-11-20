@component('mail::message')
# Hoşgeldiniz

Merhaba sayın {{ $name }},<br>
Laravel Web Portalına kaydınız başarıyla tamamlandı. Aşağıdaki butona tıklayarak poartali ziyaret edebilirsiniz.

@component('mail::button', ['url' => $url])
SITEYE GIRIS
@endcomponent

Teşekkürler,<br>
{{ config('app.name') }}
@endcomponent
