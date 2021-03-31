
var fruits  = ["Acerola – West Indian Cherry",
"Pomme",
"Apple",
"Apricots",
"Avocado",
"Banana",
"Blackberries",
"Blackcurrant",
"Blueberries",
"Breadfruit",
"Cantaloupe",
"Carambola",
"Cherimoya",
"Cherries",
"Clementine",
"Coconut Meat",
"Cranberries",
"Custard-Apple",
"Date Fruit",
"Durian",
"Elderberries",
"Feijoa",
"Figs",
"Gooseberries",
"Grapefruit",
"Grapes",
"Guava",
"Honeydew Melon",
"Jackfruit",
"Java-Plum",
"Jujube Fruit",
"Kiwifruit",
"Kumquat",
"Lemon",
"lime",
"Lime",
"Longan",
"Loquat",
"Lychee",
"Mandarin",
"Mango",
"Mangosteen",
"Mulberries",
"Nectarine",
"Olives",
"Orange",
"Papaya",
"Passion Fruit",
"Peaches",
"Pear",
"Persimmon – Japanese",
"Pitaya (Dragonfruit)",
"Pineapple",
"Pitanga",
"Plantain",
"Plums",
"Pomegranate",
"Prickly Pear",
"Prunes",
"Pummelo",
"Quince",
"Raspberries",
"Rhubarb",
"Rose-Apple",
"Sapodilla",
"Sapote, Mamey",
"Soursop",
"Strawberries",
"Sugar-Apple",
"Tamarind",
"Tangerine","other"];
var vegetables=["AMARANTE, FEUILLESAmaranth Leaves",
"ARROWROOT",
"Arrowroot",
"Artichoke",
"Arugula",
"Asparagus",
"Bamboo Shoots",
"Beans, Green",
"Beets",
"Belgian Endive",
"Bitter Melon*",
"Bok Choy",
"Broadbeans (Fava Beans)",
"Broccoli",
"Broccoli Rabe",
"Brussel Sprouts",
"Cabbage, Green",
"Cabbage, Red",
"Carrot",
"Cassava (Yuca Root)",
"Cauliflower",
"Celeriac (Celery Root)",
"Celery",
"Chayote*",
"Chicory (Curly Endive)",
"Collards",
"Corn",
"Crookneck",
"Cucumber",
"Daikon",
"Dandelion Greens",
"Edamame, Soybeans",
"Eggplant",
"Fennel",
"Fiddleheads",
"Ginger Root",
"Horseradish",
"Jicama",
"Kale",
"Kohlrabi",
"Leeks",
"Lettuce, Iceberg",
"Lettuce, Leaf",
"Lettuce, Romaine",
"Mushrooms",
"Mustard Greens",
"Okra",
"Onion (Red)",
"Onions",
"Parsnip",
"Peas, Green",
"Pepper, Green",
"Red pepper",
"Pepper, Sweet Red",
"Potato, Red",
"Potato, White",
"potatoes_small",
"Potato, Yellow",
"Pumpkin",
"Radicchio",
"Radishes",
"Rutabaga",
"Salsify (Oysterplant)",
"Shallots",
"Snow Peas",
"Sorrel (Dock)",
"Spaghetti Squash",
"Spinach",
"Squash, Butternut",
"Sugar Snap Peas",
"Sweet Potato",
"Swiss Chard",
"Tomatillo*",
"Tomato*",
"Turnip",
"Watercress",
"Yam Root",
"Zucchini","other"];
var foodgrains=["wheat",
"maize",
"jawar",
"rice","other"];
var oil=["soya&mustard oil",
"sunflower &rice bran oil",
"gingelly &groundnut oils",
"blended cooking oils",
"oilve & canola oil",
"ghee & vanaspati",
"other"];
var dalpulses=["urad & other dals",
"toor & channa & moong dal",
"Cereals & millets",
"other"];
var dryfruits=["almond",
"cashews",
"raisins",
"walnuts",
"other"];
var rice=["poha & sabudana" , "murmura",
"basmati rice",
"boiled & steam rice",
"raw rice",
"brown rice",
"other"];
var saltsugarjaggery=["salt",
"sugar",
"jaggery",
"other"];




$("#inputTop").change(function(){
  var Selected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (Selected) {
    case "fruits":
        optionsList = fruits;
        break;
    case "vegetables":
        optionsList = vegetables;
        break;
    case "foodgrains":
        optionsList = foodgrains;
        break;
    case "oil":
        optionsList = oil;
        break;
    case "dalpulses":
        optionsList = dalpulses;
        break;
    case "dryfruits":
        optionsList = dryfruits;
        break;
    case "rice":
        optionsList = rice;
        break;
    case "saltsugarjaggery":
        optionsList = saltsugarjaggery;
        break;
    
    
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputsubcat").html(htmlString);

});

