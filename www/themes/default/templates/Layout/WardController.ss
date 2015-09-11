<div class="row">
	<div class="col-md-12">
        <h1>Leeds City Council</h1>
        <h2>Headingley</h2>
        </div>
    </div>
<div class="row">
    <div class="col-md-8">
        <h3>Key Details</h3>
        <p>Date: 20th April 2015 7:00pm - 9:00pm</p>
        <p>Venue: Asda Superstore, Headingley</p>
        <h3>Candidates</h3>
        <ul class="naked-list">
            <% loop $Candidates %>
                <li class="candidate">
                    <div class="candidate__name">$Name</div>
                    <div class="candidate__party">$Party</div>
                </li>
            <% end_loop %>
        </ul>
        <h3>Trending Questions</h3>
        <ul class="naked-list">
            <% loop $Questions.Limit(5) %>
                <li class="question">
                    <div class="question__question">$Question</div>
                    <div class="question__vote">$Votes votes</div>
                    <div class="question__actions">
                        <img width="40" src="http://www.marcresearch.com/blogs/merrill/wp-content/uploads/2015/05/Thumbs-up-thumbs-down.gif" />
                    </div>
                </li>
            <% end_loop %>
        </ul>
        <h3>Social Media</h3>
        <img style="max-width: 100%" src="https://dl.dropboxusercontent.com/u/3429338/Clippings/2015-09/2015-09-11_15-22-04-j8BErYzqqi.png">
    </div>
    <div class="col-md-4">
        <h3>Previous hustings</h3>
        <ul>
            <li>
                <h5>Morrisons Car Park April 2011</h5>
                <img style="max-width: 100%" src="http://3.bp.blogspot.com/-GptEk5a497k/VZ1WmGNu-dI/AAAAAAAABWs/i2Vak-mp0_4/s1600/flat-video-player.png" />
                <a href="#">View more info</a>
            </li>
        </ul>
    </div>
</div>
