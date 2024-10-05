<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <script>





// let n=prompt("print your pattern");


// let n=5;
// for(let i=0;i<n;i++){
//     star="";
//     for(let j=0;j<n-i;j++){
//         star+=" ";
//     }
//     for(let j=0;j<=i;j++){
//         star+=" *";
//     }
//  console.log(star);


// }
// let a=5;
// for(let i=0;i<=a;i++){
//     star="";
//     for(let j=0;j<i;j++){
//         star+=" ";
//     }
//     for(let j=0;j<=a-i;j++){
//         star+=" *";
//     }
//     console.log(star);
// }


// function printStarPatterns(n) {
//     // First pattern: Right-aligned triangle
//     for (let i = 0; i < n; i++) {
//         let star = "";
//         for (let j = 0; j < n - i; j++) {
//             star += " ";
//         }
//         for (let j = 0; j <= i; j++) {
//             star += " *";
//         }
//         console.log(star);
//     }
//     for (let i = 0; i <= n; i++) {
//         let star = "";
//         for (let j = 0; j < i; j++) {
//             star += " ";
//         }
//         for (let j = 0; j <= n - i; j++) {
//             star += " *";
//         }
//         console.log(star);
//     }
// }

// let n = 5;
// printStarPatterns(n);


// let n = 5; 
// for (let i = 1; i <= n; i++) { 
// 	let str = "*"; 
// 	let space = ' '; 
// 	console.log(space.repeat((n - i)) + str.repeat(i * 2 - 1)); 
// } 
// for (let i = n - 1; i >= 1; i--) { 
// 	let str = "*"; 
// 	let space = ' '; 
// 	console.log(space.repeat((n - i)) + str.repeat(i * 2 - 1)); 
// }

// ***********************************************************************


//         * * * * * * * * 
//        * * * * * * * * 
//       * * * * * * * * 
//      * * * * * * * * 
//     * * * * * * * * 
//    * * * * * * * * 
//   * * * * * * * * 
//  * * * * * * * *


// let n=8;
// for(let i=0;i<=n;i++){
//     star="";
//     for(let j=0;j<n-i;j++){
//         star+=" ";
//     }
//     for(let j=0;j<n;j++){
//         star+="* ";
//     }
//     console.log(star); 

// }
// ***********************************************************************


// * * * * * * *
//  * * * * * * *
//   * * * * * * *
//    * * * * * * *
//     * * * * * * *
//      * * * * * * *
//       * * * * * * * 



// let n=8;
// for(let i=0;i<=n;i++){
//     star="";
//     for(let j=0;j<i-n/n;j++){
//         star+=" ";
//     }
//     for(let j=0;j<n;j++){
//         star+="* ";
//     }
//     console.log(star); 
//     }


// 
// ***********************************************************************


// let n=5;
// for(let i=0;i<=n;i++){
//     star=" ";
//     for(let j=0;j<i;j++){
//         star+=" ";
//     }
//     for(let j=0;j<n-i;j++){
//         star+="*";
//     }
//     console.log(star); 

// }

// ***********************************************************************

//  * * * * * * * * * * *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  * * * * * * * * * * *


// let n=10;
// str=" ";
// for(let i=0;i<n;i++){
//     for(let j=0;j<n;j++){
//     if(i==0||j==0||i==3||j==5){
//         str+="*";
//     }else{
//         str+="  ";
//     }
// }
// console.log(str);
// }


// ***********************************************************************
//  * * * * * * * * * * *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  *         *         *
//  *                   *
//  *                   *
//  *                   *
//  *                   *
//  * * * * * * * * * * *
// let n=10;

// str="";
// for(let i=0;i<=n;i++){
//     for(let j=0;j<=n;j++){
// if(j==0||i==0||i==n||j==n||(j==n/2&&i==n/2))
// str+=`${" *"}`;

// else(
//     str+="  "
// )

//     }

//     str+="\n";

// }

// console.log(str);
// ********************************************************


// **************************************************************
// *           *
//    *       *  
//      *   *    
//        *      
//      *   *    
//    *       *  
//  *           *


// let n=6;
// str="";
// for(let i=0;i<=n;i++){
//     for(let j=0;j<=n;j++){
// if(j==i||j==n-i)
// str+=`${" *"}`;
// else(
//     str+="  "
//     )
//     }

//     str+="\n";

// }

// console.log(str);


// ***************************************************************************





// ***********************************************************************
//           *
//          * *
//         *   *
//        *     *
//       *       *
//      *         *
//     *           *
//    *             *
//   * * * * * * * * *

// let n = 9; 
// let str = "";
// for (let i = 0; i < n; i++) {
//     for (let j = 0; j < n - i ; j++) {
//         str += " "; 
//     }
//     for (let j = 0; j <= i; j++) {
//         if (j === 0 || j === i || i === n - 1) {
//             str += " *";
//         } else {
//             str += "  "; 
//         }
//     }
//     str += "\n";
// }
// console.log(str);





// let n=prompt("enter the your number ");
// let increment=1;
// for(let i=1;i<=n;i++){
//     star=" ";

//     for(let j=0;j<i;j++){
//        star+=increment+" ";
//        increment++;

//     }
//     console.log(star);
// }

//   pascal triangle or palindrom triagnle is same ok than we have print  this
//   on !DONE WE HAVE UPLOADED THE ON GIT AND REPLIT ALSO;




// let a=5;
// let count=1;
// for(let i=0;i<=a;i++){
//     star="";
//     for(let j=0;j<a-i;j++){
//         star+=" ";
//     }
//     for(let j=0;j<=i;j++){
//         star+=count+" ";
//         count++;
//     }
//     console.log(star);
// }




let n=prompt("enter any number");
let str="";
for(let i=1;i<=n;i++){
    for(let k=1;k<=n-i;k++){
   str+=" ";
    }
    for(let j=1;j<=i;j++){
        str+=j;
    }
    for(let q=i-1;q>=1;q--){
    str+=q;
    }
    str+="\n";
}
console.log(str);



</script>

</body>
</html>