<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Homepage');

Route::get('/intro', function(){
    return view('intro');
})->name('introduction');

Route::get('/map', function(){
    return view('mappa');
})->name('map');

Route::get('/allCharacters', function(){
    $characters=[
        ['id' => 1 , 'name' => 'Soraka', 'class' => 'Support', 'img' => '/media/soraka.webp'],
        ['id' => 2 , 'name' => 'Ashe', 'class' => 'AdCarry', 'img' => '/media/ashe.jfif'],
        ['id' => 3 , 'name' => 'Orianna', 'class' => 'Mid Laner', 'img' => '/media/orianna.jfif'],
        ['id' => 4 , 'name' => 'Olaf', 'class' => 'Jungler', 'img' => '/media/olaf.jfif'],
        ['id' => 5 , 'name' => 'Nasus', 'class' => 'Top Laner', 'img' => '/media/Nasus.jpg'],
    ];
    return view('allCharacters',['characters'=>$characters]);
})->name('all-Characters');

Route::get('/characters/details{id}', function($id){
    $characters=[
        ['id' => 1 , 'name' => 'Soraka', 'class' => 'Support', 'img' => '/media/soraka.webp', 'passive' => 'Salvation, Soraka runs faster towards nearby low health allies.', 'q' =>' STARCALL:
        A star falls from the sky at the target location dealing magic damage and slowing enemies. If an enemy champion is hit by Starcall, Soraka recovers Health.', 'w'=>'ASTRAL INFUSION->
        Soraka sacrifices a portion of her own health to heal another friendly champion.', 'e'=>'EQUINOX->
        Creates a zone at a location that silences all enemies inside. When the zone expires, all enemies still inside are rooted.','r'=>'WISH->
        Soraka fills her allies with hope, instantly restoring health to herself and all allied champions.'],
        ['id' => 2 , 'name' => 'Ashe', 'class' => 'AdCarry', 'img' => '/media/ashe.jfif','passive' => "FROST SHOT->
        Ashe's attacks slow their target, causing her to deal increased damage to these targets. Ashe's critical strikes deal no bonus damage but apply an empowered slow to the target.", 'q' => "RANGER'S FOCUS->
        Ashe builds up Focus by attacking. At maximum Focus, Ashe can cast Ranger's Focus to consume all stacks of Focus, temporarily increasing her Attack Speed and transforming her basic attack into a powerful flurry attack for the duration.", 'w'=>'AVOLLEY->
        Ashe fires arrows in a cone for increased damage. Also applies Frost Shot.', 'e'=>'HAWKSHOT->
        Ashe sends her Hawk Spirit on a scouting mission anywhere on the map.','r'=>'ENCHANTED CRYSTAL ARROW->
        Ashe fires a missile of ice in a straight line. If the arrow collides with an enemy Champion, it deals damage and stuns the Champion, stunning for longer the farther arrow has traveled. In addition, surrounding enemy units take damage and are slowed.'],
        ['id' => 3 , 'name' => 'Orianna', 'class' => 'Mid Laner', 'img' => '/media/orianna.jfif','passive' => "CLOCKWORK WINDUP
        Orianna's Attacks deal additional magic damage. This damage increases the more Orianna Attacks the same target.", 'q' =>' COMMAND: ATTACK
        Orianna commands her Ball to fire toward a target location, dealing magic damage to targets along the way (deals less damage to subsequent targets). Her Ball remains at the target location after.', 'w'=>'COMMAND: DISSONANCE
        Orianna commands her Ball to release a pulse of energy, dealing magic damage around it. This leaves a field behind that speeds up allies and slows enemies.', 'e'=>'COMMAND: PROTECT
        Orianna commands her Ball to attach to an allied champion, Shielding them and dealing magic damage to any enemies it passes through on the way. Additionally, the Ball grants additional Armor and Magic Resist to the champion it is attached to.','r'=>'COMMAND: SHOCKWAVE
        Orianna commands her Ball to unleash a shockwave, dealing magic damage and launching nearby enemies towards the Ball after a short delay.'],
        ['id' => 4 , 'name' => 'Olaf', 'class' => 'Jungler', 'img' => '/media/olaf.jfif','passive' => 'BERSERKER-> RAGE Olaf gains Attack Speed and Life Steal based on his missing Health.', 'q' => "UNDERTOW
        Olaf throws an axe into the ground at a target location, dealing damage to enemies it passes through and reducing their Armor and Move Speed. If Olaf picks up the axe, the ability's cooldown is reset.", 'w'=>"TOUGH IT OUT
        Olaf's Attack Speed is increased, he reduces incoming damage, and he gains a Shield",'e' => 'RECKLESS SWING
        Olaf attacks with such force that it deals true damage to his target and himself, refunding the Health cost if he destroys the target.','r'=>"RAGNAROK
        Olaf passively gains increased armor and magic resist. He can activate this ability to become immune to disables for as long as he keeps attacking."],
        ['id' => 5 , 'name' => 'Nasus', 'class' => 'Top Laner', 'img' => '/media/Nasus.jpg','passive' => "SOUL EATER
        Nasus drains his foe's spiritual energy, giving him bonus Life Steal.", 'q' =>' SIPHONING STRIKE-> Nasus strikes his foe, dealing damage and increasing the power of his future Siphoning Strikes if he slays his target.', 'w'=>'WITHER-> Nasus ages an enemy champion, decelerating their Move Speed and Attack Speed over time.', 'e'=>'SPIRIT FIRE-> Nasus unleashes a spirit flame at a location, dealing damage and reducing the Armor of enemies who stand on it.','r'=>'FURY OF THE SANDS-> Nasus unleashes a mighty sandstorm that batters nearby enemies. While the storm rages, he gains increased Health, Attack Range, damages nearby enemies, has a reduced cooldown on Siphoning Strike, and gains bonus Armor and Magic Resistance.'],
    ];
    foreach($characters as $character){

        if($character['id']==$id){
            return view('details',['character'=>$character]);
            
        }
    };
})->name('details');

Route::get('/allSupports', function(){
    $characters=[
        ['id' => 1 , 'name' => 'Soraka', 'class' => 'Support', 'img' => '/media/soraka.webp'],
        ['id' => 2 , 'name' => 'Ashe', 'class' => 'AdCarry', 'img' => '/media/ashe.jfif'],
        ['id' => 3 , 'name' => 'Orianna', 'class' => 'Mid Laner', 'img' => '/media/orianna.jfif'],
        ['id' => 4 , 'name' => 'Olaf', 'class' => 'Jungler', 'img' => '/media/olaf.jfif'],
        ['id' => 5 , 'name' => 'Nasus', 'class' => 'Top Laner', 'img' => '/media/Nasus.jpg'],
    ];
    foreach($characters as $character){
        if($character['class']==''){
            return view('all-supports',['character'=>$characters]);   
        }
    }
})->name('all-Supports');