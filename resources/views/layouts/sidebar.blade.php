<div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              @foreach( $archives as $stats )
              <li>
                <a href="/?month={{ $stats['month']}}&year={{ $stats['year']}}">{{ $stats['month'] .' '. $stats['year'] }}</a>
              </li>
              @endforeach
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled">
              @foreach( $tags as $tag )
              <li>
                <a href="/posts/tags/{{ $tag }}">{{ $tag }}</a>
              </li>
              @endforeach
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>