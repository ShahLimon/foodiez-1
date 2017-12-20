<div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-default " id="navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                        </div>
                   <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified" id="nav">
                        <li class="{{ Request::is('/foodiez/public') ? "active" : "" }}" ><a data-scroll href="/foodiez/public">HOME</a></li>
                        <li class="{{ Request::is('food') ? "active" : "" }}" ><a data-scroll href="food">Food List</a></li>
                        <li class="{{ Request::is('restaurant') ? "active" : "" }}" ><a data-scroll href="restaurant">Restaurant List</a></li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}" ><a data-scroll href="contact">Contacts</a></li>
                    </ul>
                 </div>
                </div>
                </nav>
            </header>
