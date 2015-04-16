Feature: Fikstury dla tabeli rich

Scenario: Lista fixtur z tabeli rich
  Given I am on "rich.html"
    Then I should see "China"
    And I should see "18"
    Then I should see "USA"
    And I should see "17"
    Then I should see "India"
    And I should see "16"