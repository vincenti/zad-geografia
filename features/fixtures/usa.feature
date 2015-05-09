Feature: Fikstury dla tabeli usa

Scenario: Lista fixtur z tabeli usa
  Given I am on "usa.html"
    Then I should see "New York"
    And I should see "8"
    Then I should see "Los Angeles"
    And I should see "4"
    Then I should see "Chicago"
    And I should see "3"