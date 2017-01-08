<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Display post</title>

  <!-- Styles -->
  <link href="{{ URL::asset('css/forge.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  
</head>

<body>
 <div class="chrome">
  <div class="wrapper">
    
   <nav class="navigation -white -floating">
    <a class="navigation__logo" href="#"></a>
  </nav>
  
  <main role="main">
   
    <header role="banner" class="header header--home">
      <div class="wrapper">
        <h1 class="header__title message-callout -above">Display post n° <?php echo $id; ?> </h1>
      </div>
    </header>
    
    <!-- print a table filled with post's content -->
    <section>
     <table>
      <tr>
        <th class="message-callout -above"> <strong > Property </strong> </th>
        <th> <strong > Value  </strong> </th>
      </tr>
      <tr>
        <td class="message-callout -above">Id</td>
        <td><?php echo $id; ?></td>
      </tr>
      <tr>
        <td class="message-callout -above">Title</td>
        <td><?php echo $title; ?></td>
      </tr>
      <tr>
        <td class="message-callout -above">Body</td>
        <td><?php echo $body; ?></td>
      </tr>
      <tr>
        <td class="message-callout">Author</td>
        <td><?php echo $author; ?></td>
      </tr>
    </table>
  </section>
  
</main>

</div>
</div>
</body>


</html>
