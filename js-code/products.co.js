// /*
//     Name: Tanaka Machona
//     Semester : 1.2
//     Course : HCS

// */

// let mangaArray = [

//     ["Attack on Titan", 'AOT.jpg',
//     "A post-apocalyptic world where humanity fights giant humanoid creatures.",
//     "12.99"],
    
//     ["Naruto Shippuden", 'NARUTO.jpg',
//     "A young ninja's journey to become the strongest ninja in his village.", 
//     "10.99"],
    
//      ["One Piece", 'one-piece.jpg',
//     "The adventures of Monkey D. Luffy and his crew in search of the ultimate treasure.",
//     " 9.99"],
    
//      ["Death Note",'death-note.jpg',
//     "A high-stakes battle of wits between a brilliant student and a mysterious notebook.",
//     "8.49"],

//     ['Mujirushi: The Sign of Dreams',
//     'mujirushi.avif',
//     'Kamoda, a business owner, faces financial losses after a failed scheme. He meets a mysterious man who claims to change his life. A manga filled with mystery and dark humor.',
//     "3.60"],

//     ['Stargazing Dog (Takashi Murakami, 2008 - 2009)','SD.jpg',
//      'Happie, a stray dog, is adopted by Miku. As life changes, Happie embarks on a journey with his owner. A heartfelt story from a dog\'s perspective',
//     "8.00"
//      ],

//      ['A Silent Voice (Yoshitoki Ōima, 2013 - 2014)','ASV.jpg',
//      'Set in a futuristic world, where children called “Clovers” possess magical powers. Their abilities are classified by the number of clover leaves tattooed on them',
//      "5.00"
//      ],

//      ['The Gods Lie (Kaori Ozaki, 2013)','TGL.jpeg',
//      'A touching story about friendship, loss, and growing up during summer break',
//      "15.00"
//      ],

//      ['A Silent Voice (Yoshitoki Ōima, 2013 - 2014)','ASV.jpg',
//      'A powerful story about redemption, forgiveness, and communication, centered around a deaf girl and her former bully',
//      "12.00"
//      ]
//   ];
  
// let tileContent = {
//     title : '',
//     image : '../images/',
//     mangaDiscription: '',
//     price : ''
// }

// const objTileCreate = function() {
//     console.log('Hello')
    
//     for(let manga of mangaArray){
//         tileContent.title = manga[0];
//         tileContent.image = "../images/" + manga[1];
//         tileContent.mangaDiscription = manga[2];
//         tileContent.price = manga[3];

//         let tileCreater = `
//             <div class="tile">
//                             <h3>${tileContent.title}</h3>
//                             <div class="image">
//                                 <img src="${tileContent.image}" alt="manga Image">
//                             </div>
//                             <div class="description">
//                                 <p>${tileContent.mangaDiscription}</p>
//                             </div>
//                             <div class="chapter">
//                                 Chapter : <input type="text" value="1" class="chapterNumber">
//                             </div>
//                             <span class="tile-price">$${tileContent.price}</span>
//                             <input type='Button' class='Buy' value='Buy'>
//             </div>`

//             let container = document.querySelector('.tile-container');

//             container.innerHTML += tileCreater;
//     }
// }

// objTileCreate();




 