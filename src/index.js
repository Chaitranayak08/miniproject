const express = require("express")
const path = require("path")
//const fs = require("node: fs")
const app = express()
const hbs = require("hbs")
const LogInCollection = require("./mongodb")
const port = process.env.PORT || 3000
app.use(express.json())

app.use(express.urlencoded({ extended: true }))

const templatePath = path.join(__dirname, '../templates')
const publicPath = path.join(__dirname, '../public')
console.log(publicPath);



app.set('view engine', 'hbs')
app.set('views', templatePath)
app.use(express.static(publicPath))


// hbs.registerPartials(partialPath)


app.get('/login', (req, res) => {
   res.render('/home')
    //let a = fs.readFileSync("home.html")
    //res.send(a.toString())
})
app.get('/', (req, res) => {
    res.render('login')
})



app.get('/home', (req, res) => {
    res.render('home')
 })

app.post('/login', async (req, res) => {
    
   /* const data = new LogInCollection({
     firstname: req.body.firstname,
        lastname: req.body.lastname,
        email:req.body.email,
        password: req.body.password
     })
    await data.save()*/

    const data = {
      firstname: req.body.firstname,
        lastname: req.body.lastname,
        email:req.body.email,
        password: req.body.password
    }

    const checking = await LogInCollection.findOne({ name: req.body.name })

   try{
    if (checking.name === req.body.name && checking.password===req.body.password) {
        res.send("user details already exists")
    }
    else{
        await LogInCollection.insertMany([data])
    }
   }
   catch{
    res.send("wrong inputs")
  }

    res.status(201).render("home", {
        name: req.body.name
    })
})


app.post('/login', async (req, res) => {

    const data = new LogInCollection({
            name: req.body.name,
           password: req.body.password
        })
        /*const check = await LogInCollection.findOne({ name: req.body.name })*/

   try {
        const check = await LogInCollection.findOne({ name: req.body.name })

        if (check.password === req.body.password) {
            res.status(201).render("home", { naming: `${req.body.password}+${req.body.name}` })
        }

        else {
            res.send("incorrect password")
        }


    } 
    
    catch (e) {

        res.send("wrong details")
    }
})
/*let submit= async(e) {
    e.preventDefault();
}*/
app.listen(port, () => {
    console.log('port connected');
})
