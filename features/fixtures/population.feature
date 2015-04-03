Feature: Fikstury dla tabeli population

  Scenario: Lista fixtur z tabeli population
    Given I am on "populations.html"
     Then I should see "Asia"
      And I should see "4298000000"
     Then I should see "Africa"
      And I should see "1111000000"
     Then I should see "Europe"
      And I should see "742000000"

