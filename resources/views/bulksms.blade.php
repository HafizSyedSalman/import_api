<html>
      <body>
         <form action="{{url('bulksms')}}" method="post">
              @csrf
                      @if($errors->any())
              <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if( session( 'success' ) )
             {{ session( 'success' ) }}
        @endif

             <label>Phone numbers</label>
             <input type='text' name='numbers' />

            <label>Message</label>
            <textarea name='message'></textarea>

            <button type='submit'>Send!</button>
      </form>
    </body>
</html>