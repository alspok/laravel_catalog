<div class="navPanel">
      <div class="row">
        <div class="large-12 columns">

          <nav class="top-bar">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                <h1>
                  {{link_to_route('home', 'your_text_is_here') }}
                </h1>
              </li>
              <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->

              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
              <ul class="right">
                <li>{{link_to_route('home', 'Home') }}</li>
                <li>{{link_to_route('about', 'About') }}</li>
                <li class="has-dropdown">{{link_to('#', 'Buying') }}

                  <ul class="dropdown">
                    <li>{{link_to_route('the_benefits_of_home_ownership', 'The Benefits of Home Ownership') }}</li>
                    <li>{{link_to_route('the_importance_of_buyers_agent', 'The Importance of a Buyer\'s Agent') }}</li>
                    <li>{{link_to_route('deciding_where_to_live', 'Deciding Where to Live') }}</li>
                    <li>{{link_to_route('anatomy_of_a_home_purchase', 'Anatomy of a Home Purchase') }}</li>
                    <li>{{link_to_route('how_much_house_can_you_afford', 'How Much House Can You Afford?') }}</li>
                    <li>{{link_to_route('five_tips_to_narrow_your_online_home_search', '5 Tips to Narrow Your Online Home Search') }}</li>
                  </ul>
                </li>
                <li class="has-dropdown">{{link_to('#', 'Selling') }}
                  <ul class="dropdown">
                    <li>{{link_to_route('the_right_listing_agent', 'The Right Listing Agent') }}</li>
                    <li>{{link_to_route('how_an_agent_markets_your_home', 'How an Agent Markets Your Home') }}</li>
                    <li>{{link_to_route('pricing_your_home_to_sell', 'Pricing Your Home to Sell') }}</li>
                    <li>{{link_to_route('preparing_your_house_for_sale', 'Preparing Your House for Sale') }}</li>
                    <li>{{link_to_route('consider_a_home_inspection_when_selling', 'Consider a Home Inspection When Selling') }}</li>
                  </ul>
                  <li/>
                  <li class="has-dropdown">{{link_to('#', 'Mortgage') }}
                    <ul class="dropdown">
                      <li>{{link_to_route('preparing_your_house_for_sale', 'Preparing Your House for Sale') }}</li>
                      <li>{{link_to_route('finding_the_right_mortgage_professional', 'Finding the Right Mortgage Professional') }}</li>
                      <li>{{link_to_route('getting_preapproved', 'Getting Preapproved') }}</li>
                      <li>{{link_to_route('how_much_can_you_afford', 'How Much Can you afford?') }}</li>
                      <li>{{link_to_route('down_payments_how_much_do_you_need', 'Down Payments: How Much Do You Need?') }}</li>
                      <li>{{link_to_route('mortgages_101_basic_loan_types', 'Mortgages 101: Basic Loan Types') }}</li>
                      <li>{{link_to_route('renovating_a_home', 'Renovating a Home? Consider a 203(k) Loan') }}</li>
                    </ul>
                    <li/>
                    <li class="has-dropdown">{{link_to('#', 'News') }}
                      <ul class="dropdown">
                        <li>{{link_to_route('real_estate_news', 'Real Estate News') }}</li>
                        <li>{{link_to_route('news_for_buyers', 'News for Buyers') }}</li>
                        <li>{{link_to_route('news_for_sellers', 'News for Sellers') }}</li>
                      </ul>
                      <li/>
                      <li>{{link_to_route('contact', 'Contact') }}</li>
                    </ul>
                  </section>
                </nav>
              </div>
            </div>
          </div>