# mlm_project
Multi-Level Marketing (MLM) system in Core PHP

Multi-Level Marketing (MLM) system with:

 User Registration with Sponsor Assignment (2:1 ratio)
 Tree Placement Logic
 Milestone-Based Payout Calculation

Project Structure:

mlm_project/
│── config/
│   ├── database.php
│── includes/
│   ├── functions.php
│── public/
│   ├── index.php
│   ├── register.php
│── views/
│   ├── header.php
│   ├── footer.php
│   ├── register_form.php

Application Features

    User Registration & Referral
        Each user has a unique referral link.
        New users are assigned to the tree structure based on the 2:1 ratio.

    MLM Tree Structure (Binary)
        Each user can have two direct downlines.
        A third user gets assigned to the next available downline (filling the structure in a 2:1 ratio).

    Milestone-Based Payouts
        Example: When a user has 50 members under them, they receive a payout.
        Admin can define milestones (e.g., 50, 100, 200 members) and corresponding rewards.

    Dashboard & Reporting
        Visual tree structure to track users.
        Total earnings & referrals per user.
        Admin panel to manage users & payout milestones.
