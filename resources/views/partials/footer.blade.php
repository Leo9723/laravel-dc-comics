<?php
    $footerMenu = [
        [
           'img' => 'buy-comics-digital-comics.png',
           'name' => 'DIGITAL COMICS' 
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'name' => 'DC MERCHANDISE' 
         ],
         [
            'img' => 'buy-comics-subscriptions.png',
            'name' => 'SUBSCRIPTION' 
         ],
         [
            'img' => 'buy-comics-shop-locator.png',
            'name' => 'COMIC SHOP LOCATOR' 
         ],
         [
            'img' => 'buy-dc-power-visa.svg',
            'name' => 'DC POWER VISA'
         ]
    ];
    $list = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];

    $FooterList = [
        [
          'title' => 'DC COMICS',
          'Item' => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News'
          ]
          ],
        [
          'title'=> 'SHOP',
          'Item'=> [
            'Shop DC',
            'Shop DC Collectibles'
          ]
          ],
        [
          'title'=> 'DC',
          'Item'=> [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshop',
            'CPSC Certificates',
            'Rating',
            'Shop Help',
            'Contact Us'
          ]
          ],
        [
          'title'=> 'SITES',
          'Item'=> [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
          ]
        ]
      ]
?>

<div>
    <div class="info">
      <ul>
        @foreach ($footerMenu as $element)
                                <li>
                                  <div class="element">
                                          <div class="element-img">
                                                  <img src="/img/{{ $element['img'] }}" alt="">
                                          </div>
                                          <div class="element-text">
                                                  {{ $element['name'] }}
                                          </div>
                                  </div>
                                </li>
         @endforeach

      </ul>
    </div>
    <div class="links">
      <div>
        @foreach($FooterList as $FooterListItem)
        <ul>
        <span>{{ $FooterListItem['title'] }}</span>
        @foreach($FooterListItem['Item'] as $ListItem)
        <li>
          {{ $ListItem }}
        </li>
        @endforeach
      </ul>
        @endforeach
      </div>
      <div class="logo">
      </div>
    </div>
    <div class="media">
      <div class="mediacontainer">
      <div class="sign-up">
        <button>SIGN-UP</button>
      </div>
      <div class="socials">
        <div>
          FOLLOW US
        </div>
        <div>
          <img src="/img/footer-facebook.png" alt="">
        </div>
        <div>
          <img src="/img/footer-twitter.png" alt="">
        </div>
        <div>
          <img src="/img/footer-youtube.png" alt="">
        </div>
        <div>
          <img src="/img/footer-pinterest.png" alt="">
        </div>
        <div>
          <img src="/img/footer-periscope.png" alt="">
        </div>
      </div>
      </div>
    </div>
  </div>