Feature: Fikstury dla tabeli richest

  Scenario: Lista fixtur z tabeli richest
    Given I am on "richest.html"
     Then I should see "China"
      And I should see "1"
     Then I should see "Usa"
      And I should see "2"
     Then I should see "India"
      And I should see "3"

