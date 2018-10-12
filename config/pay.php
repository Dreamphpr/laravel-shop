<?php

return [
    'alipay' => [
        'app_id'         => '2016092200566573',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsMqLv3uO0lVkewPhj1WM3k68pGHraOkfSQSgJGukVHIbsqytWczXLhd5NaZYCAjX+lAlpvLD+PR4A5bC8VlV8TGFbNQ+iNhZOzkApT5sfbymWwec0XIlOBGI6WO5aQ+LyR9XxYGkH1gEVN3I1Sa2/CZYbjGbkjmkeS+HYeqchg45MWZqHU2NyfF1ksHFZ2/v9z4oeeYrnAX9+bT4c658pqkkgzX+TiHmSTp51/GcOp5giYMg6HX6mJeFD/jj40RERZBpKfMql9GgJiWaKQmPhHl/Vw5m+rzlv0qNdhZ5ZMP0mUIli0RUBKzLlXZy8ExDCLA9QHzzh8nNHFQlrQ+wHQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAuNp4KcA8t3DnIa0V2FgfgTGkJiVz4CLIUMscE0v/0sQisTKJDM88yagAYpojDkj6ULOVeTa7IC6mR0s2xk7W43gJFZ1KjIszxlC7tDt7kXOX8coCMFm6NWR+rJKBtwpqwe6GRLM2B2EewxSeGeXZ0ZIkyUIe2MDupGXVkE6kgxeRUNsxm5eACNB5HDJdo08qY/sicQkaO58XctuwSitXQ+INy/y3+9EG0Rs0TcnsZh73T4L/gH95JD7bvR+dg2WCL+L+HNuLRMsS4H28YLIOS416SbY5NgoI1egUV5p/BS0UZPl+DtLHIe5WhhTjcdMFKZOVbbAipMGP1nPyZ5+N/QIDAQABAoIBAEnU+Km0XovmTGrm9xKyH+M6MJYL33xmaBvdBBmxATztme2sgZDcNStWLtEzP001WMVi9RC1C4iPGVrgb8BFPQ8dooM/j8cS0lsjY9VY7MHrqYSparZlIDqzKOVEnwq83mcXHgnSioHoCKFiWsN9SsKp3IeGIUvxw19mTSaWQp8Y3JOgH/xmuIkKaVeDzBzAjZg5Wv+OnlI2E4ckM+AMvZv9cpD/d1i+evDOFMNwUMX/f9+Y9WnFLYkqsDKthEaJ44R+LwUd1LWJZnHMtvEYIzYbp/C3imWDLvvl+WCzIyFzitfRImlcaFXQlIC2y1YajMTSfXrsywBE/J+27Z5X0AECgYEA56GKUHId7htJ3A+CcFEuRDDEeXs11C50ztMYFpqo+hasyUm2OodsiASb1SFXTLy0YpmdIMhS0oxVsYCFukceTkb3S9e17AfI+zBBFIjL0IO8Z9icB1+33/m/rMxdGpriQLHNUZpz5YI0eFJaQ+0kwp72G43syZyIS81NuZQ+73ECgYEAzE0USWlAuER/3I+wNFtktcMbPp+q7Dln4WAAXO4YS0Co63zHWOoqF6+d/Lu7qIT0OaYB1K2WM+kLB4YrMFcN1UF4plhsuVZgVRNB4/PrDNHXqcrtLSvwUO16gSQncpwk1rfoAVH07aauMActrIlRSH5qwRjvGqAqRi4zPF+HmU0CgYBMpHn0tl3K7IKa6xLZATOS4qQQIkGkbJ6/1L9Ss2gYICqaC+bdJPQ3aXb6paaSQJpbScLhFwe4nTC5o/Ibue6ALiEjmkOaztSksMnH9p+h5gUQQ28VTYm09ZmDnrdr1zXn/C0YxEd2+IdODMnLUgtozlpWsbZY24+JrWv7bN8KMQKBgDXqFXN2GkVGlnOPW9HFWKN69KKnIkUqtRZN7mqXzsN1Md7LVBRL34XWq5u5s0E6rPTVsV/920ihtG5s4tLj9luT5pIHfdG/ULbC2T2d7ia47e/6BHNKSCYjNZQFBYACYtpjOA+5ICjjNs6n5k7FAjVeXy/MM7VUFTPmF1FUaIV1AoGAOK656ciEMgtltvMfZ13Y7cAlF1hPheqeBIFh2+IL9KBxXjiFhYp6lypOc/qQYKnbjMUSjQdv5SsOQTiKncjvg9N4KJykt21hgtKoV1kZbMQv6oiucdF6Di5Hfd+DonP9CD1zFnMs7b13feGMQqFfEutctF5IcFF5EC57RGg3/WQ=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];