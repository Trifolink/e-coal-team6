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

        $article = Article::create([
            "title" => "Pastel de nata",
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
            "mediaURL" => "https://www.youtube.com/watch?v=qQpd3g8SaxE",
            "leadStory" => true
        ]);

        $article = Article::create([
            "title" => "Poutine",
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
            "thumbnailURL" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fcuisine.journaldesfemmes.fr%2Frecette%2F3092033-la-fameuse-poutine-canadienne&psig=AOvVaw2fptxFnosaEITiItP8SyfL&ust=1708078127580000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPjQyIGNrYQDFQAAAAAdAAAAABAE",
            "mediaType" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/1200px-Flag_of_Canada_%28Pantone%29.svg.png",
            "mediaURL" => "https://www.youtube.com/watch?v=auUiA7755Mo",
            "leadStory" => true
        ]);

        $article = Article::create([
            "title" => "Rougail Saucisse",
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
            "mediaURL" => "https://www.youtube.com/watch?v=i75w5XoNDmk",
            "leadStory" => true
        ]);

        $article = Article::create([
            "title" => "Kouign-Amann",
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
            "mediaURL" => "https://www.youtube.com/watch?v=i75w5XoNDmk",
            "leadStory" => true
        ]);

        $article = Article::create([
            "title" => "Bowl of Phở",
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
            "mediaURL" => "https://www.youtube.com/watch?v=kJxA0pk1q-Y",
            "leadStory" => true
        ]);


     
        $tag1 = Tag::create(['name' => 'ecoal23']);
        $tag2 = Tag::create(['name' => 'react']);
        


        $article->tags()->attach([$tag1->id, $tag2->id]);        
    }
}

