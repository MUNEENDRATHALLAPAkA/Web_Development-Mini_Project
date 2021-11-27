function save() {
  if (typeof (Storage) === "undefined")
    alert("No local Storage");

  else if (window.openDatabase) {
    var db = openDatabase("CollegeData", "1.0", "List of Colleges", 100000);

    db.transaction(function (tx) {
      tx.executeSql("CREATE TABLE colleges(cname text,ccode number,addr text,city text,zipcode text,cont text,stream text)", [],
        function (tx) {
          alert("college Table created");
        });  
    });

    db.transaction(function (tx) {
      tx.executeSql("INSERT INTO colleges(cname,ccode,addr,city,zipcode,cont,stream) values(?,?,?,?,?,?,?)",
        [cname.value,ccode.value,addr.value,city.value,zipcode.value,cont.value,stream.value],
        function (tx, result) {
          alert("Record Created");
        });
    });
  }
  else
    alert("Unable to open web sql database");
}

