<div class="section-header text-center">
    <p>Donate Today</p>
</div>
<div class="d-flex justify-content-center align-items-center bg-light">
    <div class="card p-4" style="max-width: 400px; width: 100%;">
        <ul class="nav nav-tabs w-100" id="donationTabs" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link active w-100" id="one-time-tab" data-bs-toggle="tab" data-bs-target="#one-time" type="button" role="tab" aria-controls="one-time" aria-selected="true">One Time</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="false">Monthly</button>
            </li>
        </ul>
        <div class="tab-content mt-3" id="donationTabsContent">
            <div class="tab-pane fade show active" id="one-time" role="tabpanel" aria-labelledby="one-time-tab">
                <div class="d-flex overflow-auto" style="max-width: 100%; white-space: nowrap;">
                    <button type="button" class="btn btn-outline-primary me-2">$10</button>
                    <button type="button" class="btn btn-outline-primary me-2">$25</button>
                    <button type="button" class="btn btn-outline-primary me-2">$50</button>
                    <button type="button" class="btn btn-outline-primary me-2">$100</button>
                    <button type="button" class="btn btn-outline-primary me-2">$250</button>
                </div>
            </div>
            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                <div class="d-flex overflow-auto" style="max-width: 100%; white-space: nowrap;">
                    <button type="button" class="btn btn-outline-primary me-2">$5/month</button>
                    <button type="button" class="btn btn-outline-primary me-2">$10/month</button>
                    <button type="button" class="btn btn-outline-primary me-2">$20/month</button>
                    <button type="button" class="btn btn-outline-primary me-2">$50/month</button>
                    <button type="button" class="btn btn-outline-primary me-2">$100/month</button>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary w-100 mt-3" id="donateBtn1">Donate Now</button>
    </div>
</div>

<script>
    document.getElementById("donateBtn1").addEventListener("click", function(event) {
        event.preventDefault();
        alert("Thank you for your generosity! Please contact us via email at info@empoweredforchange.or.tz to get more details on how you can contribute to our cause.");
    });
</script>