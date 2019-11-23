var MongoClient = require('mongodb').MongoClient;
// Connect using the connection string
let url = "mongodb+srv://louie:19950810@cluster0-q0y0c.mongodb.net/test?retryWrites=true&w=majority"
MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("ratemyta");
  dbo.collection("tatable").findOne({}, function(err, result) {
    if (err) throw err;
    console.log(result.name);
    db.close();
  });
});