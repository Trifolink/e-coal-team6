<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Article;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Les tags
        $tag1 = Tag::create(['name' => 'Portugal']);
        $tag2 = Tag::create(['name' => 'nata']);
        $tag3 = Tag::create(['name' => 'poutine']);
        $tag4 = Tag::create(['name' => 'Canada']);
        $tag5 = Tag::create(['name' => 'rougail']);
        $tag6 = Tag::create(['name' => 'Reunion Island']);
        $tag7 = Tag::create(['name' => 'kouign amann']);
        $tag8 = Tag::create(['name' => 'French']);
        $tag9 = Tag::create(['name' => 'bowl of phở']);
        $tag10 = Tag::create(['name' => 'Vietnam']);
        $tag11 = Tag::create(['name' => 'onigiri']); 
        $tag12 = Tag::create(['name' => 'Japan']);
        $tag13 = Tag::create(['name' => 'hot pot']); 
        $tag14 = Tag::create(['name' => 'China']);
        $tag15 = Tag::create(['name' => 'mamaliga']); 
        $tag16 = Tag::create(['name' => 'Romania']);
        $tag17 = Tag::create(['name' => 'adobo']); 
        $tag18 = Tag::create(['name' => 'Philippines']);
        $tag19 = Tag::create(['name' => 'bigos']); 
        $tag20 = Tag::create(['name' => 'Poland']);

        // Les articles
        $article1 = Article::create([
            "title" => "Pastel de nata from Spain",
            "content" => "Discover the Portuguese delicacy: Pastéis de Nata

            If you've ever had the chance to wander the cobbled streets of Lisbon or Porto, you've probably been drawn to the tantalizing aroma emanating from the windows of cafés and patisseries. One of Portugal's most emblematic delicacies is undoubtedly Pastéis de Nata, little cream tarts that are stunning in their simplicity and flavor.
            
            Historical origins
            Pastéis de Nata, or simply 'Nata' as they are familiarly known, have a rich and fascinating history. Their creation dates back to the early 19th century, in Lisbon's Belém district, where the Hieronymite monastery (Mosteiro dos Jerónimos) played a crucial role. Here, the nuns produced pastries to support themselves, using the egg yolks to iron clothes and the whites to make clay. With the surplus yolks, they invented these delicious cream tarts, jealously guarding their secret recipe.
            
            The Traditional Recipe
            Although many pastry makers around the world have appropriated this recipe, nothing beats the original. Crisp puff pastry is filled with a light, creamy custard, flavored with vanilla and cinnamon. Pastéis de Nata are often served warm, sprinkled with powdered sugar and cinnamon, adding a touch of sweetness and spice to every bite.
            
            International success
            Over the years, Pastéis de Nata have become a culinary symbol of Portugal, capturing the hearts of gourmets the world over. Their popularity has crossed borders, and today they can be found in many major cities across the globe. However, for an authentic experience, nothing beats a visit to a traditional Portuguese patisserie, where every bite transports you to the heart of Lisbon.
            
            A tradition worth preserving
            Despite their apparent simplicity, the preparation of Pastéis de Nata is a delicate art requiring patience and expertise. Portuguese pastry chefs jealously guard the ancestral techniques and recipes handed down from generation to generation. Each Pastéis Nata is the fruit of artisanal know-how, and it's this attention to detail that makes it an unforgettable taste experience.
            
            Conclusion
            In conclusion, Pastéis de Nata are much more than just a pastry, they are the very embodiment of Portuguese tradition and passion. Their fascinating history and exquisite taste make them a staple of Portuguese cuisine and a true delight for taste buds the world over. Whether you're a local or a traveler in awe, one bite of this delicacy instantly transports you to the sun-drenched streets of Portugal.
            ",
            "thumbnailURL" => "https://cdn.visitportugal.com/sites/default/files/styles/encontre_detalhe_poi_destaque/public/mediateca/shutterstock_432439069_PasteisNata_GV_Natalia%20Mylova%20660x371.jpg?itok=xtMU7PEP",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/langfr-1280px-Flag_of_Portugal.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/qQpd3g8SaxE?si=MDqQXS3ZIwHnsKKs",
            "leadStory" => true
        ]);


        $article2 = Article::create([
            "title" => "Poutine from Canada",
            "content" => "Discover the Delicious Canadian Tradition: Poutine

            Canadian cuisine is rich in comforting and tasty dishes, but none is as iconic and delicious as poutine. This simple yet decadent dish is a true Canadian institution, enjoyed by everyone from locals to international travelers.
            
            Historical origins
            Poutine has humble origins, but its history has become legendary over the years. It is said to have originated in the province of Quebec in the 1950s, in the Drummondville or Warwick region, although the accuracy of this anecdote remains open to debate. Whatever the case, poutine quickly became a popular street food across Canada, and its popularity has been growing ever since.
            
            The Traditional Recipe
            The poutine recipe is simple but irresistible: fresh French fries, crispy on the outside and soft on the inside, are topped with a generous portion of fresh cheese curds, and the whole thing is drizzled with a delicious hot brown gravy. Cheese curds are essential to poutine's characteristic texture: they must be fresh, slightly elastic and melt slightly under the heat of the sauce.
            
            A treat for the taste buds
            Poutine is much more than just a dish of fries and cheese; it's a real treat for the taste buds. The combination of heat, texture and flavor creates an explosion of sensations in the mouth that leaves no one indifferent. Whether enjoyed as a quick snack on a night out with friends, or as a hearty meal after a night of partying, poutine is always an unforgettable culinary experience.
            
            Creative evolution
            Although the traditional poutine recipe has remained unchanged for decades, many creative variations have emerged over time. Additions such as shredded meat, bacon, sautéed mushrooms or even seafood are often incorporated to create unique and delicious versions of this Canadian classic. Whatever the variation, one thing's for sure: poutine remains as delicious and comforting as ever.
            
            A Canadian symbol
            Over the decades, poutine has become much more than a simple dish; it has become a symbol of Canadian cuisine and the spirit of conviviality that reigns throughout the country. Whether you're visiting Canada or have lived here for years, a mouthful of poutine instantly transports you to the warm, welcoming atmosphere of the country's bustling streets.
            ",
            "thumbnailURL" => "https://www.196flavors.com/wp-content/uploads/2022/04/Poutine-FP.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/1200px-Flag_of_Canada_%28Pantone%29.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/auUiA7755Mo?si=_LqtDUR-HvfrRyIZ",
            "leadStory" => false
        ]);

        $article3 = Article::create([
            "title" => "Rougail Saucisse from Reunion Island",
            "content" => "Explore the Exotic Flavor of Reunion: Rougail Saucisse

            Nestled in the Indian Ocean, Reunion Island is a veritable paradise for lovers of exotic cuisine. Among the many delicious dishes emanating from this tropical island, Rougail Saucisse stands out as one of the most emblematic and appreciated.
            
            Historical origins
            Rougail Saucisse has its origins in Réunion's rich culinary history, where Indian, African, European and Chinese influences blend to create a unique palette of flavors. Introduced by French settlers in the 17th century, sausages quickly became an integral part of local cuisine, giving rise to this savory, spicy dish.
            
            The traditional recipe
            The traditional recipe for Rougail Saucisse is simple yet delicious. It highlights the local ingredients and exotic spices that characterize Reunionese cuisine. Smoked sausages, often pork, are sliced and simmered with fresh tomatoes, onions, garlic, ginger, chillies and a blend of spices such as turmeric, cumin and coriander. All served with white rice or grains, a type of local legume.
            
            A feast of flavors
            Rougail Saucisse is much more than just a dish; it's a feast of flavors that awakens the taste buds and transports guests on an unforgettable culinary journey. The combination of tender, juicy smoked sausages with the spicy, fragrant sauce creates an explosion of flavors that delights the senses and comforts the soul.
            
            A culinary tradition
            Rougail Saucisse is much more than a simple dish; it's a veritable culinary institution on Réunion Island. It is often prepared at family feasts, community celebrations and local festivals, where it is generously served and lovingly shared. Its popularity transcends the island's borders, and it has become a staple of Réunionese restaurants around the world.
            
            Conclusion
            In conclusion, Rougail Saucisse is much more than just a dish; it's a symbol of Réunion's identity and cultural richness. Its exotic flavor and authentic ingredients make it a unique and unforgettable culinary experience. Whether you're a local or a traveler in awe, one bite of Rougail Saucisse instantly transports you to the colorful, fragrant streets of this magical tropical island.
            ",
            "thumbnailURL" => "https://cdn.chefclub.tools/uploads/recipes/cover-thumbnail/b149e0b8-eabf-45dc-828d-a72cccdba490.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Proposed_flag_of_R%C3%A9union_%28VAR%29.svg/1200px-Proposed_flag_of_R%C3%A9union_%28VAR%29.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/i75w5XoNDmk?si=wkhY33P1IVKNu8OJ",
            "leadStory" => false
        ]);

        $article4 = Article::create([
            "title" => "Kouign-Amann from France",
            "content" => "Discover the Breton delicacy: Kouign-Amann

            Nestled in the heart of Brittany, a French region renowned for its rich culture and delicious cuisine, lies a very special delicacy: Kouign-Amann. This sweet delight, also known as the 'Breton cake', is a veritable nugget of French patisserie.
            
            Historical origins
            The history of Kouign-Amann dates back to the 19th century, in the small town of Douarnenez, Brittany. Originally, it was created by Breton bakers as a sweet version of the traditional butter bread, intended to satisfy the palates of gourmets on special occasions and local festivities. Its very name, 'Kouign-Amann', literally means 'Butter bread' in Breton, which perfectly reflects its basic composition.
            
            The Traditional Recipe
            The traditional recipe for Kouign-Amann is a masterpiece of simplicity and flavor. It consists of a flaky bread dough, made from flour, butter and sugar, which is folded over and over to create delicate layers of dough and butter. Once baked, the dough caramelizes to form a crisp, golden crust, while the inside remains soft and melt-in-the-mouth. The end result is an irresistible sweet, buttery and slightly salty pastry that literally melts in your mouth.
            
            An Unmissable Delight
            Kouign-Amann is much more than just a dessert; it's a culinary experience in its own right. Its delicate texture, rich taste and elegant presentation make it the perfect choice for all special occasions, from weddings to birthdays and anniversaries. Whether accompanied by a cup of coffee in the morning or enjoyed as dessert after a hearty meal, Kouign-Amann is always a source of pleasure and comfort for all those lucky enough to taste it.
            
            A worldwide reputation
            Over the years, Kouign-Amann has conquered the hearts of gourmets the world over. Its fame now extends far beyond the borders of Brittany and France, and it can be found in many high-end patisseries across the globe. However, for a truly authentic experience, nothing beats a visit to a traditional Breton bakery, where each Kouign-Amann is prepared with love and craftsmanship.
            
            Conclusion
            In conclusion, Kouign-Amann is much more than a simple pastry; it's a symbol of Breton culinary art and the passion of the artisan bakers who have been preparing it with care for generations. Its exquisite flavor and indulgent character make it a true icon of French gastronomy, and a not-to-be-missed taste experience for all lovers of sweets and gourmet delights.
            ",
            "thumbnailURL" => "https://cdn.chefclub.tools/uploads/recipes/cover-thumbnail/b149e0b8-eabf-45dc-828d-a72cccdba490.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Proposed_flag_of_R%C3%A9union_%28VAR%29.svg/1200px-Proposed_flag_of_R%C3%A9union_%28VAR%29.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/-CiS6LSNGfI?si=Vt9Imo6eqx43iSZM",
            "leadStory" => true
        ]);

        $article5 = Article::create([
            "title" => "Bowl of Phở from Vietnam",
            "content" => "Travel to Vietnam through a Bowl of Phở

            Phở is much more than just a soup; it's a culinary experience that captures the very essence of Vietnamese cuisine. Originating in northern Vietnam, this fragrant soup has become one of the country's most iconic dishes, enjoyed by locals and travelers alike from around the world.
            
            Historical origins
            The history of phở dates back to the early 20th century, during the French colonial era in Vietnam. It originated in the bustling streets of Hanoi, where street vendors sold bowls of hot soup to early-morning workers. Phở takes its name from the Vietnamese word 'phở', which refers to the flat rice paste used in the soup.
            
            The Traditional Recipe
            The traditional phở recipe is a masterpiece of simplicity and subtlety. At its base is a beef or chicken broth, infused with spices such as cinnamon, star anise, clove and ginger, which give it its characteristic flavor. Fresh rice noodles are then added to the broth, followed by slices of beef or chicken cooked to perfection. The whole dish is garnished with green onions, fresh coriander, Thai basil and bean sprouts, and served with lime wedges and fresh chillies for a touch of spice.
            
            A feast for the senses
            The phở is much more than just a meal; it's a sensory experience that awakens the taste buds and transports guests to the bustling streets of Vietnam. Each bite is an explosion of flavors and textures, combining the comforting warmth of broth, the softness of rice noodles and the richness of perfectly cooked meat. Fresh herbs add a touch of freshness and fragrance, while additional garnishes allow everyone to personalize their soup according to their preferences.
            
            A culinary institution
            Over the years, phở has become much more than just a dish; it's a culinary institution in Vietnam, and a source of national pride. It is often eaten for breakfast or lunch, but can also be enjoyed at any time of day. Restaurants specializing in phở, called 'phở 24/7', are open 24 hours a day to satisfy the cravings of lovers of this delicious soup at all hours.
            
            Conclusion
            In conclusion, phở is much more than just a soup; it's a symbol of Vietnam's identity and culinary richness. Its exquisite flavor and meticulous preparation make it a gastronomic experience in its own right, and a genuine invitation to travel to the heart of the flavors and traditions of this magnificent Southeast Asian country.
            ",
            "thumbnailURL" => "https://www.foodrepublic.com/img/gallery/how-to-eat-a-bowl-of-pho-like-you-know-what-youre-doing/l-intro-1689243243.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/langfr-225px-Flag_of_Vietnam.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/kJxA0pk1q-Y?si=shPQCepdhDqRE6Dv",
            "leadStory" => true
        ]);

        $article6 = Article::create([
            "title" => "Onigiri from Japan",
            "content" => "Discover Japanese Culinary Art through Onigiri

            Onigiri, also known as 'rice balls' or 'bento balls', are popular and versatile snacks in Japanese cuisine. These little filled rice balls are a veritable institution in Japan, offering a delicious combination of simplicity and flavor.
            
            Historical origins
            Onigiri are an ancient culinary creation dating back to Japan's Edo period (1603-1868). Originally, they were prepared to be taken on journeys or long days working in the rice fields. Samurai also appreciated them as a compact, high-energy meal they could easily consume on the go. Over time, onigiri have become a staple of Japanese cuisine, enjoyed by people of all ages and social classes.
            
            The traditional recipe
            The traditional recipe for onigiri is simple yet delicious. It consists of cooked Japanese rice, usually seasoned with rice vinegar, sugar and salt to give it a slightly tangy flavor. The rice is then shaped into small balls or triangles, and garnished with a variety of toppings, such as grilled fish, nori seaweed, pickled vegetables or preserved meat. Onigiri are often wrapped in a sheet of nori seaweed to hold them together and add a touch of savory flavor.
            
            A practical snack
            Onigiri are more than just a snack; they're a complete on-the-go meal, perfect for a quick lunch break or tasty snack at any time of day. Their compact size and convenient packaging make them easy to carry and eat, making them a popular choice for students, busy professionals and travelers on the go. What's more, their versatility allows gourmets to customize their onigiri with a variety of toppings to suit their personal preferences.
            
            An integral part of Japanese culture
            In Japan, onigiri are much more than just a food; they are an integral part of the country's culinary and social culture. They are often lovingly prepared at home or purchased from konbini (convenience stores) and street stalls all over Japan. They also feature in many Japanese mangas, anime and films, making them an icon of the country's popular culture.
            
            Conclusion
            In conclusion, onigiri are much more than a simple snack; they are symbols of Japanese culinary art and the spirit of practicality and conviviality that reigns in Japan. Their delicate flavor, soft texture and versatility make them a food enjoyed by millions of people around the world, and an invitation to explore the delights of Japanese cuisine.
            ",
            "thumbnailURL" => "https://odelices.ouest-france.fr/images/recettes/onigiri_thon_concombre-1-984x1250.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg",
            "mediaURL" => "https://www.youtube.com/embed/hkMLNyIfd-M?si=VyOxAe-mX8PWS6dd",
            "leadStory" => true
        ]);

        $article7 = Article::create([
            "title" => "Hot Pot from China",
            "content" => "Immerse yourself in China's Gourmet Hot Pot Experience

            Hot pot, also known as 'huǒguō' in Mandarin, is much more than just a meal in China, it's an unmissable culinary experience that brings family and friends together around a table laden with delicious fillings and flavored broths.
            
            Historical origins
            The origins of the hot pot date back over 1,000 years to China, where it originated in the Sichuan province, renowned for its spicy, richly flavored cuisine. Back then, hot pot was a popular street food, prepared with local ingredients such as mutton, beef and vegetables, simmered in a fragrant broth spiced with spices.
            
            Preparing a hot pot
            The preparation of a hot pot is simple but delicious. A large pot filled with fragrant broth is placed in the center of the table, often divided into two sections to offer a variety of flavors, such as spicy and non-spicy. Diners then choose from a selection of fresh ingredients, such as slices of beef, pork or lamb, seafood, mushrooms, noodles, vegetables and tofu, which they dip into the boiling broth to cook to perfection. Once cooked, the food is removed from the pot and dipped in a tasty sauce before being enjoyed.
            
            A social experience
            The hot pot is much more than just a meal; it's a social experience that fosters sharing, conviviality and the pleasure of eating together. Diners gather around the table, chatting and joking as they indulge in culinary delights. The hot pot is often associated with festive celebrations, family reunions or gatherings of friends, where it creates lasting memories and strengthens bonds between participants.
            
            A Variety of Flavors
            What makes hot pot so unique is its diversity of flavors and combinations. Each region of China has its own version of the hot pot, with variations in the types of broth, ingredients used and sauces served. For example, Chongqing's hot pot is renowned for its intense heat and spicy flavor, while Mongolia's hot pot incorporates thin slices of mutton and yak meat in a rich, flavorful broth.
            
            Conclusion
            In conclusion, the hot pot is much more than just a meal; it's a culinary and social experience that embodies the spirit of sharing and conviviality in China. Whether you're a fan of spicy cuisine or a follower of milder flavors, the hot pot offers an unforgettable gastronomic experience that delights the taste buds and warms the heart.
            ",
            "thumbnailURL" => "https://christinapotvin.com/wp-content/uploads/2022/12/Fondue-chinoise-Sichuanaise-scaled.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/2560px-Flag_of_the_People%27s_Republic_of_China.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/Ukl8EuST5rM?si=Eme26yw821DuTNU0",
            "leadStory" => false
        ]);

        $article8 = Article::create([
            "title" => "Mămăligă from Romania",
            "content" => "Explore Romania's Culinary Richness with Mămăligă

            Mămăligă is more than just a side dish in Romania, it's a staple food that embodies the country's culinary identity and richness. This simple but delicious corn porridge has been enjoyed for centuries by the locals and remains a staple of traditional Romanian meals.
            
            Historical origins
            The origins of mămăligă date back to antiquity, when corn was introduced to Europe from the Americas. In Romania, this dish quickly gained popularity due to its simplicity and versatility. Once considered a subsistence dish for peasants, today mămăligă is enjoyed by all Romanians, regardless of social status or geographical origin.
            
            Preparing the Mămăligă
            The preparation of mămăligă is simple, but requires special attention to achieve the perfect texture. Corn flour is slowly added to boiling water, stirring constantly to avoid lumps. The mixture is then cooked over a low heat for a long time, until it becomes thick and creamy. Mămăligă is often served hot, sliced or chopped, and accompanied by cheese, sour cream, lardons or sausages for added flavor.
            
            A Versatile Food
            Mămăligă is much more than just a side dish; it's a versatile food that can be eaten in many different ways. It can be served as an accompaniment to meat or vegetables, used as a base for more elaborate dishes such as polenta, or even eaten on its own as a main course. Its firm, creamy texture also makes it a popular ingredient in many traditional Romanian dishes, such as mămăligă cu brânză (mămăligă with cheese) or mămăligă cu smântână și brânză (mămăligă with sour cream and cheese).
            
            A deep-rooted tradition
            Over the centuries, mămăligă has become much more than just a dish; it's a symbol of Romanian identity and tradition. It is often associated with local festivities, family celebrations and cultural events, where it is generously served and lovingly shared. Its preparation is often handed down from generation to generation, preserving its culinary heritage for future generations.
            
            Conclusion
            In conclusion, mămăligă is much more than just a dish; it's a pillar of Romanian cuisine and a source of national pride. Its simplicity, versatility and richness of flavor make it a food enjoyed by all Romanians, young and old, rich and poor. Whether as a humble side dish or a festive main course, mămăligă continues to delight taste buds and warm hearts across the country.
            ",
            "thumbnailURL" => "https://www.lauralaurentiu.ro/wp-content/uploads/2017/11/mamaliga-pas-cu-pas-mamaliga-cum-se-face-mamaliga-video-reteta.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/1280px-Flag_of_Romania.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/NAi7oeu8Kgk?si=I0Ht9C2dJNoRWvqu",
            "leadStory" => false
        ]);

        $article9 = Article::create([
            "title" => "Adobo from Philippines",
            "content" => "Discover the Delight of Adobo, a Culinary Treasure from the Philippines

            Adobo is much more than just a dish in the Philippines; it's a culinary treasure trove that embodies the very essence of Filipino cuisine. With its rich flavors and simple ingredients, adobo is a favorite of many Filipinos, as well as food lovers around the world.
            
            Historical origins
            The origins of adobo date back to the Spanish colonization of the Philippines in the 16th century. The name 'adobo' comes from the Spanish word 'adobar', meaning 'to marinate' or 'to season'. Originally, adobo was a way of preserving meat in a tropical climate, using vinegar, salt and spices. Over time, the recipe developed to include a variety of local ingredients, but the cooking method and distinctive flavors remained the same.
            
            The Traditional Recipe
            The recipe for adobo varies from region to region and family to family, but the basic ingredients generally remain the same: meat (usually pork or chicken), vinegar, soy sauce, garlic, pepper and bay leaves. The meat is marinated in this mixture of spices for several hours, then cooked slowly in the marinade until tender and infused with flavor. The end result is a deliciously fragrant dish, with a savory sauce that goes perfectly with white rice.
            
            An essential step
            Adobo is a staple of Filipino cuisine, and is often prepared for special occasions, family celebrations and Sunday meals. It is also a staple of street parties and community celebrations, where it is served generously and shared lovingly. Its simplicity and versatility also make it a popular choice for everyday meals, where it can be prepared in large quantities and stored for consumption throughout the week.
            
            A cultural heritage
            Beyond its delicious flavor, adobo is a symbol of Filipino identity and culture. Its preparation is often handed down from generation to generation, preserving its culinary heritage for future generations. It is also a point of national pride, representing the richness and diversity of the Philippines' culinary traditions.
            
            Conclusion
            In conclusion, adobo is much more than just a dish; it is a culinary treasure that embodies the soul and spirit of the Philippines. With its rich flavors, simple ingredients and infinite versatility, adobo continues to delight taste buds and warm hearts across the archipelago. Whether you're a proud Filipino or a traveler in awe of world cuisine, one bite of this delicacy instantly transports you to the lively, fragrant streets of the Philippines.
            ",
            "thumbnailURL" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Chicken_adobo.jpg/1200px-Chicken_adobo.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/9/99/Flag_of_the_Philippines.svg",
            "mediaURL" => "https://www.youtube.com/embed/wwapBsT0oc8?si=CqP4ye4NOMlpwhQu",
            "leadStory" => false
        ]);

        $article10 = Article::create([
            "title" => "Bigos from Poland",
            "content" => "Discover Bigos, a culinary delight from Poland

            Bigos is much more than just a dish in Poland; it's a culinary treasure that embodies the very essence of Polish cuisine. Also known as 'sauerkraut hunter' or 'Polish sauerkraut', bigos is a savory, comforting stew that brings together a variety of ingredients to create an explosion of flavor.
            
            Historical origins
            The origins of bigos go back centuries, when Polish hunters prepared this robust dish for nourishment during long expeditions into the forest. Bigos was often prepared in large pots suspended over the fire, where it simmered slowly for hours, absorbing the aromas of the meat, cabbage and spices. Over time, bigos became a staple dish at Polish festivals, family reunions and community celebrations.
            
            The Traditional Recipe
            The recipe for bigos varies from region to region and family to family, but the basic ingredients generally remain the same: sauerkraut, meat (usually pork, beef, game or a combination of the three), smoked sausages, mushrooms, onions, garlic, carrots, and spices such as pepper, bay leaf and paprika. All these ingredients are slowly simmered together in a large pot, allowing the flavors to blend and develop slowly over time. Some cooks also add dried fruit, apples or honey for a sweet touch.
            
            A comforting dish
            Bigos is much more than just a dish; it's a true comfort for the soul. Its rich, spicy texture, combined with its savory aromas, makes it a perfect dish for the cold winter months. Served with fresh rye bread and accompanied by a Polish vodka or craft beer, bigos is an invitation to warmth and conviviality.
            
            A deep-rooted tradition
            Over the centuries, bigos has become much more than just a dish; it's a culinary tradition that's an integral part of Polish identity. Its preparation is often handed down from generation to generation, preserving its culinary heritage for future generations. It is also a point of national pride, representing the richness and diversity of Poland's culinary traditions.
            
            Conclusion
            In conclusion, bigos is much more than a simple stew; it's a symbol of the soul and spirit of Poland. With its rich flavors, simple ingredients and fascinating history, bigos continues to delight taste buds and warm hearts across the country. Whether you're a Pole proud of his roots or a traveler amazed by world cuisine, one bite of this delicacy instantly transports you to the lively, fragrant streets of Poland.
            ",
            "thumbnailURL" => "https://assets.bonappetit.com/photos/5bc65895c5a9942d0858718d/4:3/w_3748,h_2811,c_limit/bigos-1.jpg",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/langfr-1920px-Flag_of_Poland.svg.png",
            "mediaURL" => "https://www.youtube.com/embed/8Wm96F4pQoM?si=RjUWbm0TE81UkHpI",
            "leadStory" => false
        ]);



        // LEs liens entre les articles et les tags
        $article1->tags()->attach([$tag1->id, $tag2->id]);
        $article2->tags()->attach([$tag3->id, $tag4->id]);
        $article3->tags()->attach([$tag5->id, $tag6->id]);
        $article4->tags()->attach([$tag7->id, $tag8->id]);
        $article5->tags()->attach([$tag9->id, $tag10->id]);
        $article6->tags()->attach([$tag11->id, $tag12->id]);
        $article7->tags()->attach([$tag13->id, $tag14->id]);
        $article8->tags()->attach([$tag15->id, $tag16->id]);
        $article9->tags()->attach([$tag17->id, $tag18->id]);
        $article10->tags()->attach([$tag19->id, $tag20->id]);

    }
}

