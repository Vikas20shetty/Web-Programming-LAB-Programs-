let colors = ['red', 'green', 'blue', 'violet', 'black'];
let [c1, c2, , , c3] = colors;
console.log('Array after destructing');
console.log(c1, c2, c3); 


let { id, sname, percent } = { id: 123, sname: 'ABC', percent: 94 };
console.log('Object after destructing');
console.log(id, sname, percent); 


let fact = n => (n ? n * fact(n - 1) : 1);
console.log('Using arrow function');
console.log(fact(5)); 

//save the file in .js extention 
//open terminal
//type "node destructuring.js"
