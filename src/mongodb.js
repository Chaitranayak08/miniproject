const mongoose=require("mongoose")

const connect= mongoose.connect("mongodb://0.0.0.0/LoginToLocalE"); 
connect.then(() => {
    console.log("Database Connected Successfully");
})
.catch(() => {
    console.log("Database cannot be Connected");
})

const logInSchema=new mongoose.Schema({
    name:{
        type:String,
        required:true
    },
    password:{
        type:String,
        required:true
    }
})

const LogInCollection=new mongoose.model('Users',logInSchema)

module.exports=LogInCollection
