<?php
    class rich{
        function __construct(){

        }
        public function getRich(){
            ?>
            <script type="application/ld+json">
                {
                "@context":"http://schema.org",
                "@type":"ItemPage",
                "mainEntity":{
                "@id":"#Product",
                "@type":"Product",
                "name":"223.1239.000",
                "mpn":"223.1239.000",
                "sku":"223.1239.000",
                "model":"223.1239.000",
                "url":"https://www.ontrium.com/en/usa/brands/taconova/223-1239-000",
                "image":"https://www.ontrium.com/img/24111801531811.png",
                "description":"Get the best sales prices in United States for Taconova 223.1239.000  from Onrion LLC.",
                "manufacturer":"Taconova",
                "brand":{
                "@type":"Product",
                "name":"Taconova"
                },
                "review":{
                "@type":"Review",
                "reviewRating":{
                "@type":"Rating",
                "ratingValue":"4.6",
                "bestRating":"5"
                },
                "author":{
                "@type":"Person",
                "name":"Fred Anderson"
                }},
                "aggregateRating":{
                "@type":"AggregateRating",
                "ratingValue":"4.6",
                "reviewCount":"59"
                },
                "offers":{
                "@id":"#Offer",
                "@type":"Offer",
                "priceCurrency":"USD/month",
                "price":"starting from : no price",
                "availability":"http://schema.org/InStock",
                "itemOffered":{
                "@type":"Product",
                "name":"223.1239.000",
                "mpn":"223.1239.000",
                "sku":"223.1239.000",
                "model":"223.1239.000",
                "url":"https://www.ontrium.com/en/usa/brands/taconova/223-1239-000",
                "image":"https://www.ontrium.com/img/24111801531811.png",
                "description":"Get the best sales prices in United States for Taconova 223.1239.000  from Onrion LLC."
                },
                "offeredBy":{
                "@type":"Organization",
                "name":"Onrion LLC - United States",
                "logo":"https://www.ontrium.com/logo.png",
                "url":"https://www.ontrium.com",
                "contactPoint":[{
                "@type":"ContactPoint",
                "telephone":"+1 973 536 2331",
                "contactType":"Sales",
                "areaServed":"United States",
                "availableLanguage":["en"]}]
                }
             }
          }
     }
 }
            </script>
            <?php     
        }
    }
  ?>