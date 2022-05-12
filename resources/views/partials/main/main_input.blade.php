<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <form action="/" method="post">
                <!-- content  -->
                <h1 class="mb-2">Insert your content</h1>
                <div class="box-input-title  mb-2">
                    <label for="input-title">Insert title</label>
                    <input id="input-title" type="text" name="title" placeholder="Title">
                </div>
                <div class="box-input-year mb-2">
                    <label for="input-year">Original Title</label>
                    <input id="input-year" type="text" name="original_title"  placeholder="Original Title">
                </div>
                <div class="box-input-director  mb-2">
                    <label for="input-director">Nationality</label>
                    <input id="input-director" type="text" name="nationality" placeholder="Nationality">
                </div>
                <div class=" mb-2">
                    <label for="input-type">Date</label>
                    <input id="input-content-type" type="date" name="date">
                </div>

                <div class=" mb-2">
                    <label for="input-img-cover">Vote</label>
                    <input id="input-img-cover" type="number" name="vote" placeholder="vote">
                </div>
                <button type="submit">Load Movie!</button>
            </form>
        </div>
    </div>
</section>