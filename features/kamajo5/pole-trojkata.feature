Feature: Obliczenia

  Scenario: Pole trójkąta
    Given I am on homepage
    When I follow "Pole trójkąta by kustra88"
    And I fill in "a" with "2"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 2"