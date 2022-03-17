{{-- @extends('layouts.app', ['title' => 'chat']) --}}
@section('content')
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
<link rel="stylesheet" href="/css/pagina-l.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
  </head>
  <body style=" background-image: radial-gradient( rgb(83, 138, 214) 0%, rgb(134, 231, 214) 90%);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body u-xl-mode">
    <section class="u-align-center u-clearfix u-section-1" id="sec-9406">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left  u-container-style u-layout-cell u-left-cell u-size-49 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-valign-top u-container-layout-1" src="">
                  <div class="u-border-2 u-border-grey-75 u-container-style u-group u-palette-1-base u-radius-9 u-shape-round u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                      <div class="u-align-left u-border-3 u-border-palette-4-light-1 u-container-style u-gradient u-group u-radius-6 u-shape-round u-group-2">
                        <div class="u-container-layout u-container-layout-3"></div>
                      </div>
                      <div class="u-align-left u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-0 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">                    
                          <div class="u-form-group u-form-message u-form-group-1">
                            <label for="text-155a" class="u-label">Input</label>
                            <textarea placeholder="https://cdn.tailwindcss.com" id="text-155a" name="text" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-palette-1-light-1 u-radius-9 u-input-1"></textarea>
                          </div>
                          <div class="u-align-right u-form-group u-form-submit">
                            <a href="#" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-btn-submit u-button-style u-none u-text-palette-1-base u-btn-1"><span class="u-file-icon u-icon"><img src="/images/3652532.png" alt=""></span>&nbsp;
                            </a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                          </div>
                          <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                          <div class="u-form-send-error u-form-send-message">Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente.</div>
                          <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-palette-1-base u-right-cell u-size-11 u-size-xs-60 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-4">
                  <img class="u-image u-image-circle u-image-1" src="/images/fcbb672abe5a7a3b1947944f34e760cd0490e9c8f55c314a98daa1852f53fe26e3691af462469a1655442d474512ac71153b0a7bc87fa6e5d9ad91_1280.jpg" alt="" data-image-width="1280" data-image-height="720">
                  <p class="u-text u-text-1">NOME DE USUARIO<br>
                  </p>
                  <p class="u-text u-text-2">status: online<br>
                  </p>
                  <a href="" class="u-border-2 u-border-white u-btn u-btn-rectangle u-button-style u-none u-btn-2">PERFIL<br>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  </body>
</html>

@if(session()->has('token') || session('token') == null)
to logado
{{ @$token }}
@else
  nao to logado
@endif