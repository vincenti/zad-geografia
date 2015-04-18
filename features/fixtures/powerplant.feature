Feature: Fikstury dla tabeli power plant

  Scenario: Lista fixtur z tabeli power plant
    Given I am on "powerplants.html"
     Then I should see "Pocking, Germany"
      And I should see "22"
     Then I should see "Sarnia, Canada"
      And I should see "97"
     Then I should see "Golmud, China"
      And I should see "200"

