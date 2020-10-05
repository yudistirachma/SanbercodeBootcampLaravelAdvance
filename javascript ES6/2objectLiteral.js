// const newFunction = function literal(firstName, lastName){
//     return {
//       firstName: firstName,
//       lastName: lastName,
//       fullName: function(){
//         console.log(firstName + " " + lastName)
//         return 
//       }
//     }
//   }
   
//   //Driver Code 
//   newFunction("William", "Imoh").fullName() 

const newFunction = function literal(firstName, lastName){
    return {
      firstName,
      lastName,
      fullName: ()=>{
        console.log(`${firstName} ${lastName}`);
        return 
      }
    }
  }
   
  //Driver Code 
  newFunction("William", "Imoh").fullName() 
