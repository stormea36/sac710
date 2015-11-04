/**
 * Created by admin on 10/28/15.
 */

productApp.controller('ProductController',
function ProductController($scope) {
   $scope.info = {
       name: 'Sierra Patient Network',
       times: [
           {
               'Monday': '9am - 8pm',
               'Tuesday': '9am - 8pm',
               'Wednesday': '9am - 8pm',
               'Thursday': '9am - 8pm',
               'Friday': '9am - 8pm',
               'Saturday': '9am - 8pm',
               'Sunday': '9am - 8pm'
           }
       ]
   }
    $scope.items = {

        indica : [
            {
                "ID":"11",
                "name":"Grape Ape",
                "description":"Indica dominent hybrid. Named for its distinct Grape smell. Mendo Purps X Afghani X Skunk. Grown by Hail Mary Productions.",
                "active":"true",
                "image":"productImg/grape-ape.jpg",
                "prices":{
                    "G":"18",
                    "1/8":"55",
                    "1/4":"100",
                    "1/2":"180",
                    "Oz":"320"
                }
            },
            {
                "ID":"12",
                "name":"Woody Kush",
                "image":"",
                "description":"Organically grown Indica dominant hybrid. Master Kush X Hindu Kush X OG Kush.",
                "active":"false",
                "prices":{
                    "G":"15",
                    "1/8":"45",
                    "1/4":"80",
                    "1/2":"150",
                    "Oz":"250"
                }
            }
        ],
        sativa : [
            {
                "ID":"21",
                "name":"Jack Flash",
                "description":"Jack Herer X Haze X Super Skunk. Sativa dominant hybrid. Organically grown. Strong citrus and earth aroma.",
                "active":"true",
                "image":"productImg/jack-flash.jpg",
                "prices":{
                    "G":"18",
                    "1/8":"50",
                    "1/4":"90",
                    "1/2":"170",
                    "Oz":"290"
                }
            },
            {
                "ID":"22",
                "name":"XJ-13",
                "description":"Sativa dominant. Organic greenhouse. Jack Herer X G13",
                "active":"false",
                "image":"",
                "prices":{
                    "G":"15",
                    "1/8":"40",
                    "1/4":"70",
                    "1/2":"140",
                    "Oz":"240"
                }
            },
            {
                "ID": "23",
                "name": "Tangie",
                "description": "",
                "active": "true",
                "image":"productImg/tangie.jpg",
                "prices": {
                    "G": "12",
                    "1/8": "35",
                    "1/4": "60",
                    "1/2": "110",
                    "Oz": "210"
                }
            },
            {
                "ID":"24",
                "name":"Sour Tangie",
                "description":"",
                "active":"true",
                "image":"productImg/sour-tangie.jpg",
                "prices":{
                    "G":"12",
                    "1/8":"35",
                    "1/4":"60",
                    "1/2":"110",
                    "Oz":"210"
                }
            }
        ],
        hybrid : [
            {
                "ID":"31",
                "name":"Purple Girl Scout Cookies",
                "description":"",
                "active":"true",
                "image":"productImg/purple-girl-scout.jpg",
                "prices":{
                    "G":"15",
                    "1/8":"40",
                    "1/4":"70",
                    "1/2":"125",
                    "Oz":"220"
                }
            },
            {
                "ID":"32",
                "name":"Blueberry Haze",
                "description":"",
                "active":"true",
                "image":"productImg/blueberry-hazy.jpg",
                "prices":{
                    "G":"",
                    "1/8":"35",
                    "1/4":"50",
                    "1/2":"90",
                    "Oz":"175"
                }
            }
        ],
        edibles : [
            {
                "ID":"41",
                "name":"Sloth Bar",
                "description":"Medicated chocolate toffee Bar infused with 200mg of The Clear Concentrate.",
                "active":"true",
                "image":"productImg/sloth-bar.jpg",
                "price":"20"
            },
            {
                "ID":"42",
                "name":"Solvent-Free capsules 100mg",
                "description":"comes in a pack of 2. Made with MCT oil and solvent-free. Contains 100mg thc each",
                "active":"true",
                "image":"productImg/solvent-free-capsules.jpg",
                "prices":"10"
            }
        ]

    }
});


$.getJSON( "persistent/inventory.json", function( data ) {

});