<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Give rating to product</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/rating.css') }}">
</head>

<body>

<main>
   <section>
      <!-- form starts -->
      {{ Form::open(array('url' => 'rating/123')) }}
         <table>
            <fieldset>
               <tr>
                  <td colspan="1" style="text-align: center">
                  <label>Excellent</label> 
                     <br>
                     <div class="star_rating">
                        <!-- this has 4 stars, you can change to add or subtract stars. -->
                        <input type="checkbox" id="star5" name="rating" class="star" value="5">
                        <label for="star5" class="star" title="5 stars"></label>
                        <input type="checkbox" id="star4" name="rating" class="star" value="4">
                        <label for="star4" class="star" title="4 stars"></label>
                        <input type="checkbox" id="star3" name="rating" class="star" value="3">
                        <label for="star3" class="star" title="3 stars"></label>
                        <input type="checkbox" id="star2" name="rating" class="star" value="2">
                        <label for="star2" class="star" title="2 stars"></label>
                        <input type="checkbox" id="star1" name="rating" class="star" value="1">
                        <label for="star1" class="star" title="1 stars"></label>
                     </div>
                  </td>
               </tr>
            </fieldset>
            <tr>
               <td colspan="1">
                  <textarea id="rating_comment" rows="4" cols="50" name="rating_comment">Tulis review anda di sini..</textarea>
               </td>
            </tr>
            <tr>
               <td colspan="1">
                  <!-- submit or form reset buttons -->
                  <div class="rectangle">
                     <label for="submit">
                        <button type="submit" id="submit" class="rounded" value="Submit">Submit</button>
                     </label>
                  </div>
               </td>
            </tr>
         </table> 
      {{ Form::close() }}
   </section>
</main>

</body>

</html>