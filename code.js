// function gcd(a,b) { 
//     if ( a == 0 || b == 0) 
//         return abs( max(abs(a), abs(b)) ); 
  
//     let r = a % b; 
//     return (r != 0) ? gcd(b,r) : abs(b); 
// } 

// var dgcd = gcd(12, 18);
// console.log  (dgcd);


var gcd = gcd(12, 18);



function gcd(a, b) {
  if (b === 0) {
    return a;
  }
  return gcd(b, a % b);
}
console.log  (gcd);
