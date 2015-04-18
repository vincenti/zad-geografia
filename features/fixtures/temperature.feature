Feature: Fikstury dla tabeli temperature

  Scenario: Lista fixtur z tabeli temperature
    Given I am on "temperatures.html"
     Then I should see "Poland"
      And I should see "40.2"
     Then I should see "Brazil"
      And I should see "44.7"
     Then I should see "Spain"
      And I should see "47.2"

