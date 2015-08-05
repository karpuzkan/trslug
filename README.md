Laravel 5.1.8 için Türkçe karakter temizlemede yardımcı paket.

Yüklemek için composer.json içinde

    "require-dev": {
        "karpuzkan/trslug": "*@dev"
    },
    
değişikliği yapın ve 

  "composer update"

komutunu çalıştırın.

config/app.php içinde


    'providers' => [
	/* - */
        Karpuzkan\Trslug\TrslugServiceProvider::class,
    ],

dilerseniz

    'aliases' => [
	/* - */
        'trslug'    => Karpuzkan\Trslug\Facades\Trslug::class,
    ],
 şeklinde alias düzenleyebilirsiniz.

Kullanacağınız döküman içinde
	use Karpuzkan\Trslug\Facades\Trslug;

yazdıktan sonra
	\trslug::trslug('Pijamalı hasta yağız şoföre çabucak güvendi.,1234567890');

şeklinde kullanabilirsiniz.


