import groovy.sql.Sql
import groovy.io.FileType

// Set up JDBC connection
def sql = Sql.newInstance("jdbc:mysql://localhost:3306/mailnetwork",
    "mailnetwork", "admin",
    "com.mysql.jdbc.Driver")

// Grab the city pics
def image_list = []
def dir = new File(".")
dir.eachFileRecurse (FileType.FILES) {
    image_list << it
}

// Grab the city rows
def sql_list = []
sql.eachRow("select * from goodcity") {

    def city    = it.goodcity.toLowerCase().replace(' ','_')
    def state   = it.goodstate.toLowerCase()
    def country = it.goodcountry.toLowerCase()

//    println "** ${city}, ${state}, ${country}"
//    println ""

    // Try matching on city name
    def matches = image_list.findAll { it =~ /${city}/ }
    if (matches.size() == 0) {
       if (city.split('_').size() > 1) {

            // Split string and search for 'second half'
            //  i.e. las_vegas == ('las','vegas') (search for 'vegas')
            matches = image_list.findAll { it =~ /${city.split('_')[1]}\b/ }

       }
    }

    // If we have more than one match, we need to narrow the search down
    if (matches.size() > 1) {

        // Try matching on state name
        t = matches.findAll { it =~ /${state}/ }

        if ((t.size() == 0) && (state == "")) {
            t = matches.findAll { it =~ /$country}/ }
        }

        if (t.size() > 0)
            matches = t
    }
    
//    if (matches.size() != 1) {
//        println "** ${city}, ${state}, ${country}"
//        println matches
//        println ""
//    }

    if (matches.size() == 1) {

        poop = matches[0].name
        sql.execute """UPDATE goodcity SET goodcitypic = ${poop} WHERE goodcitykey = ${it.goodcitykey}"""

    }

}

sql_list.each {
//    println it
}   

image_list.each {
//    println it.name.toLowerCase()
}   


