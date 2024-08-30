<div class="card p-4" style="max-width: 400px; width: 100%;">
    <ul class="nav nav-tabs" id="donationTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="one-time-tab" data-bs-toggle="tab" data-bs-target="#one-time" type="button" role="tab" aria-controls="one-time" aria-selected="true">One Time</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="false">Monthly</button>
        </li>
    </ul>
    <div class="tab-content mt-3" id="donationTabsContent">
        <div class="tab-pane fade show active" id="one-time" role="tabpanel" aria-labelledby="one-time-tab">
            <div class="list-group overflow-auto" style="max-height: 150px;">
                <button type="button" class="list-group-item list-group-item-action">$10</button>
                <button type="button" class="list-group-item list-group-item-action">$25</button>
                <button type="button" class="list-group-item list-group-item-action">$50</button>
                <button type="button" class="list-group-item list-group-item-action">$100</button>
                <button type="button" class="list-group-item list-group-item-action">$250</button>
            </div>
        </div>
        <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
            <div class="list-group overflow-auto" style="max-height: 150px;">
                <button type="button" class="list-group-item list-group-item-action">$5/month</button>
                <button type="button" class="list-group-item list-group-item-action">$10/month</button>
                <button type="button" class="list-group-item list-group-item-action">$20/month</button>
                <button type="button" class="list-group-item list-group-item-action">$50/month</button>
                <button type="button" class="list-group-item list-group-item-action">$100/month</button>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary w-100 mt-3">Donate Now</button>
</div>