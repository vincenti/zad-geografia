Feature: Fixtures for nation table

  Scenario: List of fixtures from nation table
    Given I am on "nation.html"
     Then I should see "the Chinese people"
      And I should see "1347"
     Then I should see "the Indian people"
      And I should see "1250"
     Then I should see "Americans-USA"
      And I should see "314"

