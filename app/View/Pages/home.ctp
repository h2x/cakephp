<script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>

<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            $image->resize("blah.jpg", 100, 150, true, true, array(), true)
            <?php echo $this->Html->image("2.jpg");?>
            <div class="carousel-caption">
                <h3>LOVE LIFE</h3>
                <p>Gardens are constantly evolving, the landscape is always changing around us. Mia Mia Landscapes has a simple approach to landscape design. We design and construct sustainable Australian contemporary gardens and provide a scheduled maintenance service.</p>
            </div>
        </div>
    </div>

    <div class="carousel-inner">
        <div class="item">
            <?php echo $this->Html->image("3.jpg");?>
            <div class="carousel-caption">
                <h3>PEOPLE</h3>
                <p>The strength our business is our people, their passion and their experience. With qualified horticulturalists, landscape designers and highly skilled trades and maintenance people.</p>
            </div>
        </div>

    </div>
    <div class="carousel-inner">
        <div class="item">
            <?php echo $this->Html->image("4.jpg");?>
            <div class="carousel-caption">
                <h3>PEOPLE</h3>
                <p>The strength our business is our people, their passion and their experience. With qualified horticulturalists, landscape designers and highly skilled trades and maintenance people.</p>
            </div>
        </div>

    </div>

</div>