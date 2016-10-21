																																																																																																																																											   
           
           <h1 style="text-align: center;">Welcome To Delhi University</h1>

<!DOCTYPE html>
<html>
<head>


<script src="js/jquery2.js"></script>
<script src="js/typeahead.js"></script>

<style>
.typeahead,
.tt-query,
.tt-hint {
  width: 250px;
  height: 50px;
  padding: 5px 12px;
  font-size: 15px;
  line-height: 30px;
  border: 2px solid #ccc;
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  outline: none;
}

.typeahead {
  background-color: #fff;
}

.typeahead:focus {
  border: 2px solid #0097cf;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.tt-dropdown-menu {
  width: 422px;
  margin-top: 12px;
  padding: 8px 0;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: 18px;
  line-height: 24px;
}

.tt-suggestion.tt-is-under-cursor {
  color: #fff;
  background-color: #0097cf;

}

.tt-suggestion p {
  margin: 0;
}
</style>
</head>
<body>
<!--College select-->
<form name="mapform" action="load.php" method="post">
Choose College: </br></br><div class="example-clg"><input class="typeahead" type="text" placeholder="Select a college" name="college" id="college">
</div></br>
<input id="autocomplete" type="submit" value="Submit" >
</form>


<script>

$('.example-clg .typeahead').typeahead({
    name: 'Clg',
local: [ 
"Acharya Narendra Dev College",
"Aditi Mahavidyalaya",
"Atma Ram Sanatan Dharam College",
"Ayurvedic and Unani Tibbia College",
"Bhagini Nivedita College",
"Bharati College",
"Bhaskaracharya Colleg of Applied Sciences",
"Bhim Rao Ambedkar College",
"College of Art",
"College of Vocational Studies",
"Daulat Ram College",
"Deen Dayal Upadhyaya College",
"Delhi College of Arts and Commerce",
"Delhi College of Engineering",
"Delhi Institute of Pharmaceutical Sciences&Research",
"Deshbandhu College",
"Dyal Singh College",
"Gargi College",
"Hans Raj College",
"Hindu College",
"Indira Gandhi Institute of Physical Education&Sports Sciences",
"Indraprastha College for Women",
"Institute of Home Economics",
"Janki Devi Memorial College",
"Jesus And Mary College",
"Kalindi College",
"Kamala Nehru College",
"Keshav Mahavidyalaya",
"Kirori Mal College",
"Lady Hardinge Medical College",
"Lady Irwin College",
"Lady Shri Ram College for Women",
"Lakshmibai College",
"Maharaja Agrasen College",
"Maharshi Valmiki College of Education",
"Maitreyi College",
"Mata Sundri College for Women",
"Miranda House",
"Motilal Nehru College",
"Nehru Homoeopathic Medical College & Hospital",
"Netaji Subhash Institute of Technology",
"P.G.D.A.V. College",
"Rajdhani College",
"Rajkumari Amrit Kaur College of Nursing",
"Ram Lal Anand College",
"Ramanujan College",
"Ramjas College",
"Satyawati College",
"Shaheed Bhagat Singh College",
"Shaheed Rajguru College of Applied Sciences for Women",
"Shaheed Sukhdev College of Business Studies",
"Shivaji College",
"Shyam Lal College",
"Shyama Prasad Mukherji College",
"Sri Aurobindo College",
"Sri Guru Gobind Singh College of Commerce",
"Sri Guru Nanak Dev Khalsa College",
"Sri Guru Teg Bahadur Khalsa College",
"Sri Venkateswara College",
"St Stephens College",
"Swami Shraddhanand College",
"University College of Medical Sciences",
"Vallabhbhai Patel Chest Institute",
"Vivekanand College",
"Zakir Husain College",
"Shri Ram College of Commerce",
"Maulana Azad Medical College",
"Dyal Singh College(Evening)",
"Motilal Nehru College(Evening)",
"P.G.D.A.V. College(Evening)",
"Ram Lal Anand College(Evening)",
"Satyawati College(Evening)",
"Shaheed Bhagat Singh College(Evening)",
"Shyam Lal College(Everning)",
"Sri Aurobindo College(Evening)",
"Zakir Husain Post Graduate Evening College",
"School of Open Learning",

 ]
        
     });

</script>



</body>

