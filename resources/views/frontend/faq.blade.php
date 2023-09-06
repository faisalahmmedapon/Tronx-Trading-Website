@extends('frontend.app')


@section('meta_title', 'FAQ')
@section('meta_keywords', '')
@section('meta_description', '')

@section('content')


        <div class="questions">
            <h1 class="questions-title" dir="auto">FAQ</h1>

            <div class="questions-tabs" dir="auto">
                <a href="#general" class="questions-tab active">
                    <p class="questions-tab__title">General questions</p>
                    <div>12 questions</div>
                </a>
                <a href="#financial" class="questions-tab">
                    <p class="questions-tab__title">Financial questions</p>
                    <div>11 questions</div>
                </a>
                <a href="#verification" class="questions-tab">
                    <p class="questions-tab__title">Verification</p>
                    <div>7 questions</div>
                </a>
            </div>

            <div class="questions__container" id="general" dir="auto">
                <h2 class="questions-subtitle">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.5 0.5H4.5C3.125 0.5 2.0125 1.58 2.0125 2.9L2 22.1C2 23.42 3.1125 24.5 4.4875 24.5H19.5C20.875 24.5 22 23.42 22 22.1V7.7L14.5 0.5ZM17 19.7H7V17.3H17V19.7ZM17 14.9H7V12.5H17V14.9ZM13.25 8.9V2.3L20.125 8.9H13.25Z"
                            fill="#2F80ED"></path>
                    </svg>
                    General questions </h2>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-1">
                    <div class="questions__accordion-block">
                        <label for="faq-1" class="questions__accordion-label">
                            What are digital options?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Option is a derivative financial instrument based on any
                                underlying asset, such as a stock, a currency pair, oil, etc.</div><br>
                            <div>Digital option - a
                                non-standard option that is used to make a profit on price movements of
                                such assets for a certain period of time.</div><br>
                            <div>A digital option, depending on
                                the terms agreed upon by the parties to the transaction, at a time
                                determined by the parties, brings a fixed income (the difference between
                                the trade income and the price of the asset) or loss (in the amount of
                                the value of the asset).</div>
                            <div>Since the digital option is
                                purchased in advance at a fixed price, the size of the profit, as well
                                as the size of the potential loss, are known even before the trade.</div><br>
                            <div>Another feature of these deals is the time limit. Any option
                                has its own term (expiration time or conclusion time).</div>
                            <div>Regardless of the degree of
                                change in the price of the underlying asset (how much it has become
                                higher or lower), in case of winning an option, a fixed payment is
                                always made. Therefore, your risks are limited only by the amount for
                                which the option is acquired.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-2">
                    <div class="questions__accordion-block">
                        <label for="faq-2" class="questions__accordion-label">
                            What are the varieties of digital options?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Making an option trade, you
                                must choose the underlying asset that will underlie the option. Your
                                forecast will be carried out on this asset.</div>
                            <div>Simply, buying a digital contract, you are actually betting on
                                the price movement of such an underlying asset.</div>
                            <div>An underlying asset is an
                                “item” whose price is taken into account when concluding a trade.As the
                                underlying asset of digital options, the most sought-after products on
                                the markets usually act. There are four types of them:</div>
                            <div>
                                <ul>
                                    <li><span>securities (shares of world companies)</span></li>
                                    <li><span>currency pairs (EUR / USD, GBP / USD, etc.)</span></li>
                                    <li><span>raw materials and precious metals (oil, gold, etc.)</span></li>
                                    <li><span>indices (S&amp;P 500, Dow, dollar index, etc.)</span></li>
                                </ul>
                            </div>
                            <div>There is no such thing as a
                                universal underlying asset. When choosing it, you can only use your own
                                knowledge, intuition, and various kinds of analytical information, as
                                well as market analysis for a particular financial instrument.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-3">
                    <div class="questions__accordion-block">
                        <label for="faq-3" class="questions__accordion-label">
                            What is the gist of digital options trading?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>The fact is that a digital
                                option is the simplest type of derivative financial instrument. In order
                                to make money in the digital options market, you do not need to predict
                                the value of the market price of an asset that it can reach.</div>
                            <div>The principle of the trading
                                process is reduced only to the solution of one single task - the price
                                of an asset will increase or decrease by the time the contract is
                                executed.</div>
                            <div>The aspect of such options is
                                that it does not matter to you at all, that the price of the underlying
                                asset will go one hundred points or only one, from the moment the trade
                                is concluded to its close. It is important for you to determine only the
                                direction of movement of this price.</div>
                            <div>If your prognosis is correct, in any case you get a fixed
                                income.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-4">
                    <div class="questions__accordion-block">
                        <label for="faq-4" class="questions__accordion-label">
                            How to learn quickly how to make money in the digital options market?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>To get a profit in the digital
                                options market, you only need to correctly predict which way the price
                                of the asset you have chosen will go (up or down). Therefore, for a
                                stable income you need:</div>
                            <div>
                                <ul>
                                    <li><span>develop your own trading strategies, in which the number of correctly
                                                predicted trades will be maximum, and follow them</span></li>
                                    <li><span>diversify your risks</span></li>
                                </ul>
                            </div>
                            <div>In developing strategies, as
                                well as in searching for diversification options, market monitoring,
                                studying analytical and statistical information that can be obtained
                                from various sources (Internet resources, expert opinions, analysts in
                                this field, etc.) will help you, one of which is the Company website.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-5">
                    <div class="questions__accordion-block">
                        <label for="faq-5" class="questions__accordion-label">
                            At what expense does the Company pay profit to the Client in case of successful trade?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Company earns with customers.
                                Therefore, it is interested in the share of profitable transactions
                                significantly prevailing over the share of unprofitable ones, due to the
                                fact that the Company has a percentage of payments for a successful
                                trading strategy chosen by the Client.</div>
                            <div>In addition, trades conducted
                                by the Client together constitute the trading volume of the Company,
                                which is transferred to a broker or exchange, which in turn are included
                                in the pool of liquidity providers, which together leads to an increase
                                in the liquidity of the market itself.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-6">
                    <div class="questions__accordion-block">
                        <label for="faq-6" class="questions__accordion-label">
                            Can I close my account? How to do it?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>You can delete an account in
                                your Individual Account by clicking on the “Delete Account” button
                                located at the bottom of the profile page.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-7">
                    <div class="questions__accordion-block">
                        <label for="faq-7" class="questions__accordion-label">
                            What is the expiration period of a trade?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>The expiration period is the
                                time after which the trade will be considered completed (closed) and the
                                result is automatically summed up.</div>
                            <div>When concluding a trade with
                                digital options, you independently determine the time of execution of
                                the transaction (1 minute, 2 hours, month, etc.).</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-8">
                    <div class="questions__accordion-block">
                        <label for="faq-8" class="questions__accordion-label">
                            What is a trading platform and why is it needed?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Trading platform - a software
                                complex that allows the Client to conduct trades (operations) using
                                different financial instruments. It has also accesses to various
                                information such as the value of quotations, real-time market positions,
                                actions of the Company, etc.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-9">
                    <div class="questions__accordion-block">
                        <label for="faq-9" class="questions__accordion-label">
                            What are the possible results of the placed trades?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>There are three possible outcomes in the digital options
                                market:</div>
                            <div>1) in the event that your
                                prognosis of determining the direction of the price movement of the
                                underlying asset is correct, you receive income.</div>
                            <div>2) if by the time the option
                                was concluded your forecast turned out to be erroneous, you incur a loss
                                limited by the size of the asset value (i.e., in fact, you can only
                                lose your investment).</div>
                            <div>3) if the outcome of the trade
                                is zero (the price of the underlying asset has not changed, the option
                                is concluded at the price at which it was purchased), you return your
                                investment.Thus, the level of your risk is always limited only by the
                                size of the asset value.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-10">
                    <div class="questions__accordion-block">
                        <label for="faq-10" class="questions__accordion-label">
                            Is the download of the program to a computer or smartphone required?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>No, it's not required. You just need to register on the
                                Company's website in the presented form and open a individual account.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-11">
                    <div class="questions__accordion-block">
                        <label for="faq-11" class="questions__accordion-label">
                            In what currency is the Client's account opened? Can I change the currency of the
                            Client's account?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>By default, a trading account is opened in US dollars.

                                But for your convenience, the currency can be switched at any time in your profile.
                            </div>
                            <div>A list of available currencies can be found on your profile
                                page in your Client's account.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-12">
                    <div class="questions__accordion-block">
                        <label for="faq-12" class="questions__accordion-label">
                            Is there a minimum amount that I can deposit to my account at registration?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>
                                The advantage of the Company’s trading platform is
                                that you don’t have to deposit large amounts to your account. You can
                                start trading by investing a small amount of money. The minimum deposit
                                is 10 US dollars. </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questions__container" id="financial" dir="auto">
                <h2 class="questions-subtitle">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.5 0.5H4.5C3.125 0.5 2.0125 1.58 2.0125 2.9L2 22.1C2 23.42 3.1125 24.5 4.4875 24.5H19.5C20.875 24.5 22 23.42 22 22.1V7.7L14.5 0.5ZM17 19.7H7V17.3H17V19.7ZM17 14.9H7V12.5H17V14.9ZM13.25 8.9V2.3L20.125 8.9H13.25Z"
                            fill="#2F80ED"></path>
                    </svg>
                    Financial questions </h2>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-13">
                    <div class="questions__accordion-block">
                        <label for="faq-13" class="questions__accordion-label">
                            What determines profit size?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>There are several factors that affect the size of your profit:
                            </div>
                            <div>
                                <ul>
                                    <li><span>the liquidity of the asset you have
                                                chosen in the market (the more the asset is in demand in the market, the
                                                more profit you will receive)</span></li>
                                    <li><span>the time of the trade (the liquidity
                                                of an asset in the morning and the liquidity of an asset in the
                                                afternoon can vary significantly)</span></li>
                                    <li><span>tariffs of a brokerage company</span></li>
                                    <li><span>changes in the market (economic events, changes in part of a financial
                                                asset, etc.)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-14">
                    <div class="questions__accordion-block">
                        <label for="faq-14" class="questions__accordion-label">
                            How can I calculate the profit for a trade?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>You do not have to calculate the profit yourself.</div>
                            <div>A feature of digital options
                                is a fixed amount of profit per transaction, which is calculated as a
                                percentage of the value of the option and does not depend on the degree
                                of change in this value. Suppose if the price changes in the direction
                                predicted by you by only 1 position, you will earn 90% of the value of
                                the option. You will earn the same amount if the price changes to 100
                                positions in the same direction.</div>
                            <div>To determine the amount of profit, you must perform the
                                following steps:</div>
                            <div>
                                <ul>
                                    <li><span>choose the asset that will underlie your option</span></li>
                                    <li><span>indicate the price for which you would have purchased the
                                                option</span></li>
                                    <li><span>determine the time of the trade, after
                                                these actions, the platform will automatically display the exact
                                                percentage of your profit, in case of a correct prognosis</span></li>
                                </ul>
                            </div>
                            <div>The profit from the trade can be up to 98% of the amount of
                                the investment.</div>
                            <div>The yield of a digital option
                                is fixed immediately upon its acquisition, therefore you do not need to
                                wait for unpleasant surprises in the form of a reduced percentage at the
                                end of the trade.</div>
                            <div>As soon as the trade is closed, your balance will
                                automatically be replenished by the amount of this profit.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-15">
                    <div class="questions__accordion-block">
                        <label for="faq-15" class="questions__accordion-label">
                            What is the minimum deposit amount?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>
                                The advantage of the Company’s trading platform is
                                that you don’t have to deposit large amounts to your account. You can
                                start trading by investing a small amount of money. The minimum deposit
                                is 10 US dollars. </div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-16">
                    <div class="questions__accordion-block">
                        <label for="faq-16" class="questions__accordion-label">
                            How to withdraw money from the account?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>The procedure for withdrawing capital is extremely simple and
                                is carried out through your individual account.</div>
                            <div>The method that you have
                                chosen to deposit the account is also a method of withdrawing funds (see
                                the question "How can I deposit?").</div>
                            <div>For example, if you made a
                                deposit to your account via the Visa payment system, you will also
                                withdraw money via the Visa payment system.</div>
                            <div>When it comes to the
                                withdrawal of a sufficiently large amount, the Company may request
                                verification (verification is requested at the Company's sole
                                discretion), which is why it is very important to register an account
                                individually for yourself in order to confirm your rights to it at any
                                time.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-17">
                    <div class="questions__accordion-block">
                        <label for="faq-17" class="questions__accordion-label">
                            Is there any fee for depositing or withdrawing funds from the account?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>No. The company does not charge any fee for either the deposit
                                or for the withdrawal operations.</div>
                            <div>However, it is worth considering that payment systems can
                                charge their fee and use the internal currency conversion rate.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-18">
                    <div class="questions__accordion-block">
                        <label for="faq-18" class="questions__accordion-label">
                            Do I need to deposit the account of the trading platform and how often do I need to do
                            this?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>To work with digital options
                                you need to open an individual account. To conclude real trades, you
                                will certainly need to make a deposit in the amount of options
                                purchased.</div>
                            <div>You can start trading without
                                cash, only using the company's training account (demo account). Such an
                                account is free of charge and created to demonstrate the functioning of
                                the trading platform. With the help of such an account, you can practice
                                acquiring digital options, understand the basic principles of trading,
                                test various methods and strategies, or evaluate the level of your
                                intuition.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-19">
                    <div class="questions__accordion-block">
                        <label for="faq-19" class="questions__accordion-label">
                            How can I deposit?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>It is very easy to do. The procedure will take a couple of
                                minutes.</div>
                            <div>1) Open the trade execution window and click on the green
                                "Deposit" button in the upper right corner of the tab.</div>
                            <div>You can also deposit the account through your Personal Account
                                by clicking the "Deposit" button in the account profile.</div>
                            <div>2) After it is necessary to
                                choose a method of depositing the account (the Company offers a lot of
                                convenient methods that are available to the Client and are displayed in
                                his individual account).</div>
                            <div>3) Next, indicate the currency in which the account will be
                                deposited, and accordingly the currency of the account itself.</div>
                            <div>4) Enter the amount of the deposit.</div>
                            <div>5) Fill out the form by entering the requested payment
                                details.</div>
                            <div>6) Make a payment.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-20">
                    <div class="questions__accordion-block">
                        <label for="faq-20" class="questions__accordion-label">
                            How long does it take to withdraw funds?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>On average, the withdrawal
                                procedure takes from one to five days from the date of receipt of the
                                corresponding request of the Client and depends only on the volume of
                                simultaneously processed requests. The company always tries to make
                                payments directly on the day the request is received from the Client.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-21">
                    <div class="questions__accordion-block">
                        <label for="faq-21" class="questions__accordion-label">
                            What is the minimum withdrawal amount?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>The minimum withdrawal amount starts from 10 USD for most
                                payment systems.<br>For cryptocurrencies this amount starts from 50 USD (and may be
                                higher for certain currencies e.g. Bitcoin).</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-22">
                    <div class="questions__accordion-block">
                        <label for="faq-22" class="questions__accordion-label">
                            What is the minimum withdrawal amount?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>The minimum withdrawal amount starts from 10 USD for most
                                payment systems.<br>For cryptocurrencies this amount starts from 50 USD (and may be
                                higher for certain currencies e.g. Bitcoin).</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-23">
                    <div class="questions__accordion-block">
                        <label for="faq-23" class="questions__accordion-label">
                            Do I need to provide any documents to make a withdrawal?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Usually, additional documents
                                to withdraw funds are not needed . But the Company at its discretion may
                                ask you to confirm your personal data by requesting certain documents.
                                Usually this is done in order to prevent activities related to illegal
                                trade, financial fraud, as well as the use of funds obtained illegally.</div>
                            <div>The list of such documents is minimum, and the operation to
                                provide them will not take you much time and effort.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questions__container" id="verification" dir="auto">
                <h2 class="questions-subtitle">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.5 0.5H4.5C3.125 0.5 2.0125 1.58 2.0125 2.9L2 22.1C2 23.42 3.1125 24.5 4.4875 24.5H19.5C20.875 24.5 22 23.42 22 22.1V7.7L14.5 0.5ZM17 19.7H7V17.3H17V19.7ZM17 14.9H7V12.5H17V14.9ZM13.25 8.9V2.3L20.125 8.9H13.25Z"
                            fill="#2F80ED"></path>
                    </svg>
                    Registration and Verification </h2>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-24">
                    <div class="questions__accordion-block">
                        <label for="faq-24" class="questions__accordion-label">
                            What data is required to register on the Company website?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>To earn money on digital
                                options, you must first open an account that allows you to conduct
                                trades. To do this, you need to register on the Company website.</div>
                            <div>The registration process is simple and does not take much
                                time.</div>
                            <div>It is necessary to fill out a questionnaire on the proposed
                                form. You will be required to enter the following information:</div>
                            <div>
                                <ul>
                                    <li><span>name (in English)</span></li>
                                    <li><span>email address (indicate the current, work, address)</span></li>
                                    <li><span>telephone (with a code, for example, + 44123 ....)</span></li>
                                    <li><span>a password that you will use in future
                                                to enter the system (in order to minimize the risk of unauthorized
                                                access to your individual account, we recommend that you create a
                                                complex password using lowercase, uppercase letters and numbers. Do not
                                                disclose the password to third parties)</span></li>
                                </ul>
                            </div>
                            <div>After filling out the sign-up form, you will be offered
                                various ways to fund your account for trading.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-25">
                    <div class="questions__accordion-block">
                        <label for="faq-25" class="questions__accordion-label">
                            Is it possible to indicate other people's (fake) data when registering on the website?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>No. The client performs
                                self-registration on the Company's website, providing complete and
                                accurate information about himself on issues asked in the registration
                                form, and maintains this information up to date.</div>
                            <div>If it is necessary to conduct
                                various kinds of checks of the Client’s identity, the Company can
                                request documents or invite the Client to its office.</div>
                            <div>If the data entered in the
                                registration fields does not match the data of the submitted documents,
                                your individual profile may be blocked.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-26">
                    <div class="questions__accordion-block">
                        <label for="faq-26" class="questions__accordion-label">
                            How to understand that I need to go through account verification?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>If it becomes necessary to pass verification, you will receive
                                a notification by e-mail and / or SMS notification.</div>
                            <div>However, the Company uses the
                                contact details that you specified in the registration form (in
                                particular, your email address and phone number). Therefore, be careful
                                to provide relevant and correct information.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-27">
                    <div class="questions__accordion-block">
                        <label for="faq-27" class="questions__accordion-label">
                            How long does the verification process take?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>No more than 5 (five) business days from the date the Company
                                receives the requested documents.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-28">
                    <div class="questions__accordion-block">
                        <label for="faq-28" class="questions__accordion-label">
                            If I made a mistake during entering data into my individual account, how can I fix this?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>You have to contact the technical support service on the
                                Company's website and edit the profile.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-29">
                    <div class="questions__accordion-block">
                        <label for="faq-29" class="questions__accordion-label">
                            What is account verification?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>Verification in digital
                                options is a confirmation by the Client of his personal data by
                                providing the Company with additional documents. Verification conditions
                                for the Client are as simple as possible, and the list of documents is
                                minimum. For example, a Company may ask:</div>
                            <div>
                                <ul>
                                    <li><span>provide a color scan copy of the first spread of the Client's passport
                                                (passport page with photo)</span></li>
                                    <li><span>identify with the help of a "selfie" (photograph of himself)</span>
                                    </li>
                                    <li><span>confirm the address of registration (residence) of the Client,
                                                etc</span></li>
                                </ul>
                            </div>
                            <div>The Company may request any documents if it is not possible to
                                fully identify the Client and the data entered by him.</div>
                            <div>After the electronic copies of
                                documents have been submitted to the Company, the Client will have to
                                wait some time to verify the data provided.</div>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="questions__accordion-checkbox" type="checkbox" id="faq-30">
                    <div class="questions__accordion-block">
                        <label for="faq-30" class="questions__accordion-label">
                            How do I know that I successfully passed verification?
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <path
                                        d="M1.92607 4.57608C1.48603 4.16865 0.787941 4.16865 0.347902 4.57608C-0.122686 5.01178 -0.11336 5.73714 0.360622 6.1498L7.21733 12.4983C7.43186 12.6969 7.7206 12.8038 8.00641 12.8038C8.30187 12.8038 8.57926 12.6985 8.79549 12.4983L15.6522 6.1498C16.1159 5.72044 16.1159 5.00544 15.6522 4.57608C15.2122 4.16865 14.5141 4.16865 14.074 4.57608L7.9941 10.2053L1.92607 4.57608Z"
                                        fill="white"></path>
                                </g>
                            </svg>
                        </label>
                        <div class="questions__accordion-text">
                            <div>You will receive a
                                notification by e-mail and / or SMS notification about the completion of
                                the verification process of your account and the ability to proceed
                                with operations on the Company's trading platform.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
