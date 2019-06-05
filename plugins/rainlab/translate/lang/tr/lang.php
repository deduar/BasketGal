<?php return [
    'plugin' => [
        'name' => 'Çeviri',
        'description' => 'Çoklu dil destekli websiteleri oluşturmanızı sağlar.',
        'tab' => 'Çeviri',
        'manage_locales' => 'Dilleri yönet',
        'manage_messages' => 'Çevirileri yönet',
    ],
    'locale_picker' => [
        'component_name' => 'Çoklu Dil Seçimi',
        'component_description' => 'Sitenizin dilini değiştirebileceğiniz diller listesini gösterir.',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternatif hrefLang elemanları',
        'component_description' => 'Sayfa için dil alternatiflerini hreflang elemanları olarak ekler.',
    ],
    'locale' => [
        'title' => 'Dilleri yönet',
        'update_title' => 'Dili güncelle',
        'create_title' => 'Dil ekle',
        'select_label' => 'Dil seç',
        'default_suffix' => 'ön tanımlı',
        'unset_default' => '":locale" zaten ön tanımlı olarak seçili.',
        'delete_default' => '":locale" ön tanımlı olarak seçilmiş olduğu için silinemez.',
        'disabled_default' => '":locale" pasifleştirilmiş olduğu için ön tanımlı yapılamaz.',
        'name' => 'Dil İsmi',
        'code' => 'Dil Kodu',
        'is_default' => 'Ön tanımlı',
        'is_default_help' => 'Ön tanımlı seçilen dil, sitenin orjinal içeriğini belirtmektedir.',
        'is_enabled' => 'Aktif',
        'is_enabled_help' => 'Pasifleştirilen diller site ön yüzünde görüntülenmez.',
        'not_available_help' => 'Başka dil ayarı yok.',
        'hint_locales' => 'Ön yüz çevirilerini yapmak için buradan dil ekleyebilirsiniz. Ön tanımlı seçilen dil, sitenin orjinal içeriğini belirtmektedir.',
        'reorder_title' => 'Dilleri sırala',
        'sort_order' => 'Sıralama',
    ],
    'messages' => [
        'title' => 'Metinleri çevir',
        'description' => 'Metinler ve çevirileri',
        'clear_cache_link' => 'Önbelleği temizle',
        'clear_cache_loading' => 'Önbellek temizleniyor..',
        'clear_cache_success' => 'Önbellek temizlendi!',
        'clear_cache_hint' => 'Yaptığınız çeviriler site ön yüzünde görünmüyorsa <strong>Önbelleği temizle</strong> butonuna tıklayabilirsiniz.',
        'scan_messages_link' => 'Yeni metinleri tara',
        'scan_messages_begin_scan' => 'Taramaya başla',
        'scan_messages_loading' => 'Yeni metinler taranıyor...',
        'scan_messages_success' => 'Tema dosyaları tarandı!',
        'scan_messages_hint' => '<strong>Yeni metinleri tara</strong> butonuna tıklayarak tema içerisine yeni eklediğiniz metinleri de çevirebilirsiniz.',
        'scan_messages_process' => 'Bu işlem tema dosyaları içerisindeki çevrilecek metinleri tarar.',
        'scan_messages_process_limitations' => 'Bazı metinler yakalanamayabilir veya ilk kez kullanımdan sonra görüntülenebilir.',
        'scan_messages_purge_label' => 'Önce tüm eski çevirileri sil',
        'scan_messages_purge_help' => 'Eğer seçerseniz şimdiye kadar yaptığınız tüm çeviriler silinecek, tekrar çevirmeniz gerekecektir.',
        'scan_messages_purge_confirm' => 'Tüm çevirileri silmek istediğinize emin misiniz? Bu işlem geri alınamaz!',
        'hint_translate' => 'Bu kısımda site ön yüzünde görüntülenecek çeviri metinlerini bulabilirsiniz, çeviri yaptıktan sonra bir işlem yapmanıza gerek yoktur, hepsi otomatik kaydedilecek.',
        'hide_translated' => 'Çevrilen metinleri gizle',
        'export_messages_link' => 'Metinleri Dışa Aktar',
        'import_messages_link' => 'Metinleri İçe Aktar',
    ],
];
