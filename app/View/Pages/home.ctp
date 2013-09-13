<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000
        })
    });
</script>

<div class="row"></div>


<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
            <?php echo $this->Html->image("1.jpg",array('style'=>'background-size:cover'));?>
            <div class="carousel-caption">
                <h3>LOVE LIFE</h3>
                <p>Gardens are constantly evolving, the landscape is always changing around us. Mia Mia Landscapes has a simple approach to landscape design. We design and construct sustainable Australian contemporary gardens and provide a scheduled maintenance service.</p>
            </div>
        </div>
        <div class="item">
            <?php echo $this->Html->image("2.jpg",array('style'=>'background-size:cover'));?>
            <div class="carousel-caption">
                <h3>PEOPLE</h3>
                <p>The strength our business is our people, their passion and their experience. With qualified horticulturalists, landscape designers and highly skilled trades and maintenance people.</p>
            </div>
        </div>
        <div class="item">
            <?php echo $this->Html->image("3.jpg",array('style'=>'background-size:cover'));?>
            <div class="carousel-caption">
                <h3>PEOPLE</h3>
                <p>The strength our business is our people, their passion and their experience. With qualified horticulturalists, landscape designers and highly skilled trades and maintenance people.</p>
            </div>
        </div>
    </div>
  </div>
