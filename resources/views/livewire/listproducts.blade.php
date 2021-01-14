
<div>

   @if($desejonotif)

      @if(Auth::check())
      <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">
         Ops! Logue em sua conta para poder salvar este item.
        </div>
        <ul class="list">
          <li>Se você não estiver registrado click aqui.</li>
          <li>Se você já estiver registrado aqui.</li>
        </ul>
      </div>
      @else
      <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            Produto adicionado a sua lista de desejos.
        </div>
        <p>Quando quiser comprar é só dar um alo 😉</p>
       </div>

      @endif


   @endif



    {{-- Care about people's approval and you will be their prisoner. --}}
     <table class="ui very basic  celled table">
        <thead>
          <tr><th>Produtos</th>
        </tr>


    </thead>
        <tbody>

    @foreach ($products as $item)
         <tr>
            <td>
              <h4 class="ui image header">
                <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                <div class="content">
                  {{$item->nomeproduct}}
                  <div class="sub header">Human Resources
                </div>
              </div>
            </h4></td>

            <td>



                  <div wire:click="like" class="ui vertical red animated button" tabindex="0">
                    <div class="hidden content">Desejo</div>
                    <div class="visible content">
                      <i class="heart icon"></i>
                    </div>
                  </div>


                  <div class="ui vertical animated button" tabindex="0">
                    <div class="hidden content">Comprar</div>
                    <div class="visible content">
                      <i class="shop icon"></i>
                    </div>
                  </div>
            </td>



    @endforeach


</tbody>
</table>


    {{ $products->links() }}
</div>

<script>

</script>
