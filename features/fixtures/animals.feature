Feature: Fikstury dla tabeli animals

  Scenario: Lista fixtur z tabeli animals
    Given I am on "animals.html"
     Then I should see "Elephant"
      And I should see "mammal"
     Then I should see "Herring"
      And I should see "fish"
     Then I should see "Aligator"
      And I should see "reptile"

